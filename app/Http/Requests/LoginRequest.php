<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Validation\Validator;

class LoginRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return TRUE;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'email' => 'required|email',
            'password' => 'required'
		];
	}

    protected function formatErrors( Validator $validator ) {

        $errors = $validator->messages()->getMessages();

        $errors[ 'ajax_error_message' ] = "Oops ... Something wrong on your credentials!";

        return $errors;

    }

}
