<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Validation\Validator;

class TimelineRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'title' => 'required',
            'body'  => 'required'
        ];
    }

    protected function formatErrors( Validator $validator ) {

        $errors = $validator->messages()->getMessages();

        $errors[ 'ajax_error_message' ] = "Oops! You have errors.";

        return $errors;

    }

}
