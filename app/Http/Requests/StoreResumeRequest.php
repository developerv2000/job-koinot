<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreResumeRequest extends FormRequest
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
            'resume' => [
                'file', 'max:6000',
                'mimetypes:application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf'
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'resume.file' => 'Неверный формат файла',
            'resume.mimetypes' => 'Неверный формат файла. Файл должен быть MS Word или PDF формата',
            'resume.max' => 'Слишком большой размер файла. Максимальный допустимый размер 6 MB',
        ];
    }
}
