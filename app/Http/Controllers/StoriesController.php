<?php

    namespace App\Http\Controllers;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    use Illuminate\Http\Request;

    use AutismSocial\Repositories\AutismSpeaksFeed;

    class StoriesController extends Controller {

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index( AutismSpeaksFeed $feed_object )
        {
            //
            $feed_items = $feed_object->fetch();
            return view( 'public.pages.home', [ 'feed_items' => $feed_items ] );
        }



    }