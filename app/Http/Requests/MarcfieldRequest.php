<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MarcfieldRequest extends Request
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
    public function rules()
    {
        $rules = [
            'tagfield' => 'max:3|required',
            'description' => 'required'
        ];

        foreach($this->request->get('records') as $key => $val)
        {
            $rules['records.'.$key.'.description'] = 'required';
        }

        return $rules;
    }

    public function messages()
    {
        $messages = [];
        
        foreach($this->request->get('records') as $key => $val)
        {
            $messages['records.'.$key.'.description.required'] = 'The field Description (' . $key . ') is required.';
        }
        
        return $messages;
    }
}
