<?php
namespace Kerozn\Modules\Contact\Validator;
use \Prettus\Validator\LaravelValidator;

class ContactValidator extends LaravelValidator
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected $rules = [
		'name' => 'required',
		'email' => 'required|email',
		'message' => 'required',
	];
}
