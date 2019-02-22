<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElectionResultFormRequest extends FormRequest
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
        return [
            'senatorial_apc' => 'required|digits_between:0,900|integer',
            'senatorial_pdp' => 'required|digits_between:0,900|integer',
            'senatorial_other' => 'required|digits_between:0,900|integer',
            'senatorial_invalid_vote' => 'required|digits_between:0,900|integer',

            'presidential_apc' => 'required|digits_between:0,900|integer',
            'presidential_pdp' => 'required|digits_between:0,900|integer',
            'presidential_other' => 'required|digits_between:0,900|integer',
            'presidential_invalid_vote' => 'required|digits_between:0,900|integer',

            'representative_apc' => 'required|digits_between:0,900|integer',
            'representative_pdp' => 'required|digits_between:0,900|integer',
            'representative_other' => 'required|digits_between:0,900|integer',
            'representative_invalid_vote' => 'required|digits_between:0,900|integer'
        ];
    }
}
