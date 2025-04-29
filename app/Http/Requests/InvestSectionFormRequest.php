<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestSectionFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'investment_id' => 'integer',
            'type' => 'integer',
            'modaltytul' => '',
            'modaleditor' => '',
            'modaleditortext' => '',
            'modallink' => '',
            'modallinkbutton' => '',
            'file' => '',
            'file_alt' => '',
            'file_width' => '',
            'file_height' => ''
        ];
    }
}