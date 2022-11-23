<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DealerStore extends FormRequest
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
                'firm_name' => 'required',
                'ceo_name' => 'required',
                'contact' => 'required',
                'email' => 'required',
                'cnic' => 'required',
                'phone' => 'required',
                'estable' => 'required',
                'ntn' => 'required',
                'bank_name' => 'required',
                'bank_ac_number' => 'required',
        ];
    }
}
