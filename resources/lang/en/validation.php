<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => '  مشکل در تایید :attribute ',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'لطفا ایمیل معتبر وارد کنید',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field must have a value.',
    'image'                => ' فیلد :attribute باید عکس باشد',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ' :attribute باید از رقم :max کمتر باشد',
        'file'    => '  :attribute حداکثر باید 30 کیلوبایت باشد',
        'string'  => ':attribute باید از :max حرف کمتر باشد ',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => ':attribute  باید فرمت عکس باشد',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attributeباید :min رقم باشد',
        'file'    => ':attribute باید :min کلوبایت باشد',
        'string'  => ':attribute باید :min رقم باشد',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => ':attribute باید عدد باشد',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => ' فیلد :attribute خالی است',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => ' فیلد :attribute باید حروف باشد ',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => ' :attribute معتبر نیست ',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
            'name' => 'فیلد ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'نام',
        'ninja_code' => 'کد نینجا',
        'password' => 'رمز',
        'birth_certificate' => 'شماره شناسنامه',
        'nation_certificate' => 'شماره ملی',
        'job' => 'شغل',
        'birthday' => 'تاریخ تولد',
        'education' => 'تحصیلات',
        'wife_education' => 'تحصیلات همسر',
        'child_number' => 'تعداد فرزند',
        'home_number' => 'شماره تماس منزل',
        'phone_number' => 'شماره همراه',
        'work_number' => 'شماره تلفن محل کار',
        'home_address' => 'ادرس محل سکونت',
        'job_address' => 'ادرس محل کار',
        'why' => 'علت عدم تایید',
        'sick' => 'بیماری',
        'body_problem' => 'نقص عضو',
        'state' => 'محل صدور',
        'height' => 'قد',
        'image' => 'عکس شخص',
        'nation_image' => 'عکس کارت ملی',
        'ninja_image' => 'عکس کارت نینجا',
        'sanguis' => 'گروه خونی',
        'father_name' => 'نام پدر',
        'mother_name' => 'نام مادر',
        'father_job' => 'شغل پدر',
        'mother_job' => 'شغل مادر',
        'father_education' => 'تحصیلات پدر',
        'mother_education' => 'تحصیلات مادر',
        'father_death' => 'حیات پدر',
        'mother_death' => 'حیات مادر',
        'single' => 'مجرد یا متاهل',
    ],

];
