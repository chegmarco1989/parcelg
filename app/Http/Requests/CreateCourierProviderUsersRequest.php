<?php

namespace App\Http\Requests;

use App\Models\CourierProviderUsers;
use Illuminate\Foundation\Http\FormRequest;

class CreateCourierProviderUsersRequest extends FormRequest
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
        return CourierProviderUsers::$rules;
    }
}
