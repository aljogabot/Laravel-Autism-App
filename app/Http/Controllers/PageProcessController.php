<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;
use \Bogart\Json;

class PageProcessController extends Controller {

	public function contact( ContactRequest $request, Json $json ) {

        if( $request->ajax() ) {

            return $json->success( 'Thank You For Your Awesome Inquiry!' )
                ->render();

        }

    }

}
