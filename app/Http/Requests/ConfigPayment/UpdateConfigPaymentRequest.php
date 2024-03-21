<?php

namespace App\Http\Requests\ConfigPayment;

use App\Models\MasterData\ConfigPayment;
// use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateConfigPaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fee' => ['nullable', 'integer'],
            'vat' => ['required', 'string', 'max:255'],
        ];
    }
}
