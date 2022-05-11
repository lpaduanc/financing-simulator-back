<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinancingSimulatorRequest extends FormRequest
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
            'vehicle_id'=> 'nullable',
            'brand_id'=> 'nullable',
            'installment'=> 'required',
            'money_deposit'=> 'nullable',
            'email' => [
                'nullable',
                'email',
            ],
        ];
    }

    public function messages()
    {
        return [
            'installment.required' => 'Número de parcelas não informado.',
            'email.email' => 'E-mail informado é inválido',
        ];
    }
}
