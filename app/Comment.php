<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	//
    protected $fillable = [
        'comment'
    ];

    public function scopeParentOnly( $query ) {
        return $query->where( 'parent_id', 0 );
    }

    public function post() {
        return $this->belongsTo( 'App\Post' );
    }

    public function parent() {
        return $this->belongsTo( 'App\Comment', 'parent_id' );
    }

    public function children() {
        return $this->hasMany( 'App\Comment', 'parent_id' );
    }
}
