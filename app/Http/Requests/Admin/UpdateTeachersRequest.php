<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeachersRequest extends FormRequest
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
            
            'reg_number' => 'min:2|max:9999|required|numeric|unique:teachers,reg_number,'.$this->route('teacher'),
            'first_name' => 'min:3|max:50|required',
            'last_name' => 'min:3|max:50|required',
            'email' => 'required|email|unique:teachers,email,'.$this->route('teacher'),
            'qulification' => 'max:50',
        ];
    }
}
