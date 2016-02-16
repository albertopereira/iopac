<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class UserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
		//return Auth::user()->hasRole('Administrator');
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$parameters = $this->request->all();
		
		if(isset($parameters['_method']) && $parameters['_method'] != 'PATCH')
		{
			$rules = [
				'name' => 'required',
				'email' => 'required|email|unique:users',
				'password' => 'required|min:5|confirmed'
			];
		}else{
			$rules = [
				'name' => 'required',
				'email' => 'required|email|unique:users,id,' . $this->get('id')
			];
		}

		return $rules;
	}
}