<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
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
            'student_id' => 'max:9999|required|numeric|unique:students,student_id,'.$this->route('student'),
            'first_name' => 'min:2|max:50|required',
            'last_name' => 'min:3|max:50|required',
            'age' => 'min:1|max:3|required|numeric',
            'email' => 'required|email|unique:students,email',
        ];
    }
}
