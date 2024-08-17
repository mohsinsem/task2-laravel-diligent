<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProvincesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'name' => [
                'required',
                'max:50',
                'unique:provinces,name'
            ],
        ];
        

    }

	public function attributes()
    {
        return [
            'name'=> trans("please enter province name"),
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => trans('The province name has already been taken.'),
        ];
    }

}
