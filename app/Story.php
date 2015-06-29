<?php

    namespace App;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Model;

    class Story extends Model
    {

        protected $fillable = [ 'title', 'body', 'published_at' ];

        //
        protected $dates = [ 'published_at' ];

        public function setPublishedAtAttribute( $value ) {
            $this->attributes[ 'published_at' ] = Carbon::createFromFormat( 'Y-m-d', $value );
        }

    }
