<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElectionFormRequest extends FormRequest
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
        $input = [];

        if($this->has('acredited')){
            $input['acredited'] = 'required|integer|min:0|max:900';
        }else{
            $input['registered'] = 'required|integer|min:0|max:900';
        }
        return $input;
    }
}
