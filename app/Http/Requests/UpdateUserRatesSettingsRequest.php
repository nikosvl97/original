<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRatesSettingsRequest extends FormRequest
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
            'profile_access_price' => 'numeric|min:'.((int)getSetting('payments.minimum_subscription_price')).'|max:'.((int)getSetting('payments.maximum_subscription_price')),
        ];
    }
}
