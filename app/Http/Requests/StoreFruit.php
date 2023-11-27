<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class StoreFruit extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        //expect to use
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //expect to use
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
            'name' => 'bail|required|string',
            'price' => 'bail|required|numeric',
            'stock' => 'bail|required|integer',
        ];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                $isFruitRegistered = DB::table('fruit')->where('name', $validator->getData()['name'])->exists();
                // dd($isFruitRegistered);
                if ($isFruitRegistered) {
                    // dd('hello world');
                    $validator->errors()->add('name', 'This fruit already exist');
                }
            },
        ];
    }
}
