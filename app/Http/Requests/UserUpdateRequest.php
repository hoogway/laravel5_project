<?php namespace App\Http\Requests;

class UserUpdateRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$id = $this->route('user');
		return $rules = [
			'username' => 'required|max:30|alpha|unique:users,username,' . $id, 
			'email' => 'required|email|unique:users,email,' . $id
		];
	}

}
