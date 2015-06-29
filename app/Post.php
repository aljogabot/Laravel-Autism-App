<?php namespace App;

use \Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Crypt;
use League\Flysystem\Exception;

class Post extends Model {

	//
    protected $fillable = [
        'title', 'body'
    ];

    protected $dates = [ 'published_at' ];

    public function user() {
        return $this->belongsTo( 'App\User' );
    }

    public function images() {
        return $this->hasMany( 'App\Image', 'post_id' );
    }

    public function comments() {
        return $this->hasMany( 'App\Comment' );
    }

    public function setPublishedAtAttribute( $date ) {
        $this->attributes[ 'published_at' ] = Carbon::createFromFormat( 'Y-m-d', $date );
    }

    public function setPreviewAttribute( $text ) {
        $this->attributes[ 'preview' ] = $text;
    }

    public function scopeNewest( $query ) {
        return $query->latest( 'created_at' )
                     ->where( 'created_at', '<=', Carbon::now() );
    }

    public function scopeLatestLimit( $query, $number_of_items = 10 ) {
        return $query->latest( 'created_at' )
                     ->where( 'created_at', '<=', Carbon::now() )
                     ->limit( $number_of_items );
    }

    public function body() {
        return nl2br( $this->body );
    }

    public function body_preview() {
        return str_limit( $this->body, 150, ' ...' );
    }

}
