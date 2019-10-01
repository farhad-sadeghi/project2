<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditRequest extends FormRequest
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

        $user = request('id');


        return [

            'name' => ['required', 'string', 'max:40'],
            'job' => ['required', 'string', 'max:40'],
            'education' => ['required', 'string', 'max:30'],
            'home_number' => ['required', 'string', 'max:30'],
            'phone_number' => ['required', 'string', 'max:30'],
            'work_number' => ['nullable', 'string', 'max:30'],
            'wife_education' => ['nullable', 'string', 'max:30'],
            'child_number' => ['nullable', 'string', 'max:30'],
            'father_name' => ['required', 'string', 'max:40'],
            'mother_name' => ['required', 'string', 'max:40'],
            'father_job' => ['required', 'string', 'max:40'],
            'mother_job' => ['required', 'string', 'max:40'],
            'father_education' => ['required', 'string', 'max:40'],
            'mother_education' => ['required', 'string', 'max:40'],
            'birthday' => ['required', 'string', 'max:30'],
            'state' => ['required', 'string', 'max:30'],
            'home_address' => ['required', 'string', 'max:600'],
            'job_address' => ['nullable', 'string', 'max:600'],
            'why' => ['nullable', 'string', 'max:600'],
            'sick' => ['nullable', 'string', 'max:600'],
            'body_problem' => ['nullable', 'string', 'max:600'],
            'height' => ['required', 'string', 'max:30'],
            'sanguis' => ['required', 'string', 'max:20'],
            'father_death' => ['required'],
            'mother_death' => ['required'],
            'single' => ['required'],
            'ninja_code' => ['required', 'string', 'max:13', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'min:12', Rule::unique('users')->ignore($user)],
            'birth_certificate' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($user)],
            'nation_certificate' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($user)],

        ];
    }
}
