<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment, Auth;

use Illuminate\Http\Request;

use \Bogart\Json;

class CommentsController extends Controller {

	//
    public function __construct( Json $json ) {
        $this->json = $json;
    }

    public function create( Request $request ) {

        $validator = \Validator::make(
            $request->all(),
            [
                'comment' => 'required',
                'post_id' => 'required'
            ]
        );

        if( $validator->fails() ) {

            return $this->json->error_fields(
                $validator->errors()->getMessages(),
                'Oops! Error in your comment.'
            );

        }


        $post = Post::find( $request->input( 'post_id' ) );

        if( is_null( $post ) ) {

            return $this->json->error( 'Error!' );

        }

        $comment = new Comment( $request->all() );
        $comment->user_id = Auth::user()->id;

        $post->comments()->save( $comment );

        $content = \View::make( 'public.timeline.blocks.post', [ 'post' => $post ] )
            ->render();

        $this->json->set( 'content', $content );
        $this->json->set( 'post_id', '#post-' . $request->input( 'post_id' ) );

        return $this->json->success()
            ->render();

        dd();

    }

    public function reply( Request $request ) {

        $validator = \Validator::make(
            $request->all(),
            [
                'comment' => 'required',
                'parent_id' => 'required'
            ]
        );

        if( $validator->fails() ) {

            return $this->json->error_fields(
                $validator->errors()->getMessages(),
                'Oops! Error in your comment.'
            );

        }

    }

}
