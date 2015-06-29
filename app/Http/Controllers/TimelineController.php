<?php 

    namespace App\Http\Controllers;

    use App\Http\Requests\TimelineRequest;
    use App\Http\Controllers\Controller;
    use \App\Post, \App\Comment;
    use Auth;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    use \Carbon\Carbon;
    use Illuminate\Support\Facades\Validator;
    use League\Flysystem\Exception;

    class TimelineController extends Controller {

        protected $json;
        
        public function __construct( \Bogart\Json $json ) {
            $this->middleware( 'auth', [ 'except' => [ 'index', 'display' ] ] );
            $this->json = $json;
        }

        /**
    	 * Display a listing of the resource.
    	 *
    	 * @return Response
    	 */
    	public function index() {

            return view( 'public.timeline.index' );

    	}

    	/**
    	 * Store a newly created resource in storage.
    	 *
    	 * @return Response
    	 */
    	public function store( TimelineRequest $request ) {

            $post = new Post( $request->all() );

            \Auth::user()
                 ->posts()
                 ->save( $post );

            if( ! $request->ajax() )
                return redirect( 'timeline' );

            // If Ajax ...
            return $this->json
                        ->success()
                        ->render();

    	}

    	/**
    	 * Display the specified resource.
    	 *
    	 * @param  int  $id
    	 * @return Response
    	 */
    	public function show($id)
    	{
    		//
            $post = Post::findOrFail( $id );

            return dd($post);
    	}

    	public function display( Request $request ) {

            //
            if( $request->ajax() ) {

                $posts = Post::with( 'comments' )
                              ->newest()
                              ->get();

                $content = \View::make( 'public.timeline.blocks.posts', [ 'posts' => $posts ] )
                                 ->render();

                $this->json->set( 'content', $content );
                $this->json->set( 'loaded', ! empty( $content ) );

                return $this->json->render();

            }

        }



    }
