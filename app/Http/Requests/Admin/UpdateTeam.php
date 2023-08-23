<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeam extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name_ru' => 'required|max:255',
            'name_uz' => 'required|max:255',
            'job_title_ru' => 'required|max:255',
            'job_title_uz' => 'required|max:255',
            'phone' => 'required|max:55',
            'email' => 'required|max:255',
            'description_ru' => 'required',
            'description_uz' => 'required',
        ];
    }
}
