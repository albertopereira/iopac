<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecordRequest extends Request
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
            'biblio_id' => 'required',
            'itemtype_id' => 'required'
        ];

        foreach($this->request->get('fields') as $key => $val)
        {
            if($val['mandatory'] == '1' && $val['marcfield_mandatory'] == '1')
            {
                $rules['fields.'.$key.'.value'] = 'required';
            }
        }

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'biblio_id.required' => 'Please select a Library',
            'itemtype_id.required' => 'Please select an Itemtype'
        ];
        
        foreach($this->request->get('fields') as $key => $val)
        {
            $messages['fields.'.$key.'.value.required'] = 'The field value (' . $val['marcsubfield_description'] . ') is required.';
        }
        
        return $messages;
    }
}
