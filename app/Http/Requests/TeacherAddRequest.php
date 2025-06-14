<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * TeacherAddRequest
 *
 * @property string $name
 * @property string $email
 * @property int $age
 * @property string $dob
 * @property string $gender
 * @property int $scores
 * @property UploadedFile|null $image
 * @method bool hasFile(string $key)
 * @method UploadedFile file(string $key)
 */

class TeacherAddRequest extends FormRequest
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
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|unique:teachers,email',
            'age'    => 'required|integer|min:1|max:100',
            'dob'    => 'required|date',
            'gender' => 'required|in:m,f',
            'scores' => 'required|integer|min:1|max:100',
            'image'  => 'nullable|image|mimes:png,jpg,gif|max:2048',
        ];
    }

    // Messages
    public function attributes()
    {
        return [
            'name.required' => 'Please Write Teacher Name',
            'age.max'       => 'Teacher can not be older than 100',
            'email.email'   => 'Please enter a valid email address',
            'email.unique'  => 'This email is already taken',
        ];
    }
}
