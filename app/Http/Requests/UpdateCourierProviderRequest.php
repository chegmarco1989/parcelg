<?php

namespace App\Http\Requests;

use App\Models\CourierProvider;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCourierProviderRequest extends FormRequest
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
        return CourierProvider::$rules;
    }
}
