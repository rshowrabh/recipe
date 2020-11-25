<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class EditUserValidation extends FormRequest
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
            'name' => ['required'],
            'email' => ['required', 'unique:adminusers,email,' . $this->route('user')],
            'phone' => ['required', 'unique:adminusers,phone,' . $this->route('user')],
            'batch_id' => ['required'],
            'status' => ['required']
        ];
    }
}
