<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProposalRequest extends FormRequest
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
            'situacion' => 'required',
            'descripcion' => 'required',
            'propuesta' => 'required',
            'acciones' => 'required',
            'involucrados' => 'required',
            'presupuesto' => 'required',
            'documentacion' => 'required',
        ];
    }
}
