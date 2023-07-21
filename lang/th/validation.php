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

    'accepted' => ':attribute ต้องถูกยอมรับ',
    'accepted_if' => ':attribute ต้องถูกยอมรับเมื่อ :other เป็น :value',
    'active_url' => ':attribute ไม่ใช่ URL ที่ถูกต้อง',
    'after' => ':attribute ต้องเป็นวันที่หลังจาก :date',
    'after_or_equal' => ':attribute ต้องเป็นวันที่หลังจากหรือเท่ากับ :date',
    'alpha' => ':attribute ต้องมีอักขระเป็นตัวอักษรเท่านั้น',
    'alpha_dash' => ':attribute ต้องมีอักขระเป็นตัวอักษร, ตัวเลข, ขีดกลาง และขีดใต้เท่านั้น',
    'alpha_num' => ':attribute ต้องมีอักขระเป็นตัวอักษรและตัวเลขเท่านั้น',
    'array' => ':attribute ต้องเป็นอาเรย์',
    'ascii' => 'The :attribute must only contain single-byte alphanumeric characters and symbols.',
    'before' => ':attribute ต้องเป็นวันที่ก่อน :date',
    'before_or_equal' => ':attribute ต้องเป็นวันที่ก่อนหรือเท่ากับ :date',
    'between' => [
        'array' => ':attribute ต้องมีระหว่าง :min ถึง :max ชิ้น.',
        'file' => ':attribute ต้องมีขนาดระหว่าง :min และ :max กิโลไบต์.',
        'numeric' => ':attribute ต้องอยู่ระหว่าง :min และ :max.',
        'string' => ':attribute ต้องมีความยาวระหว่าง :min และ :max อักขระ.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'การยืนยัน :attribute ไม่ตรงกัน.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => ':attribute ไม่ตรงกับรูปแบบ :format.',
    'decimal' => 'The :attribute must have :decimal decimal places.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => ':attribute และ :other ต้องแตกต่างกัน.',
    'digits' => ':attribute ต้องมี :digits หลัก.',
    'digits_between' => ':attribute ต้องอยู่ระหว่าง :min และ :max หลัก.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'doesnt_end_with' => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => 'ที่อยู่อีเมล :attribute ไม่ถูกต้อง.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lowercase' => 'The :attribute must be lowercase.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => ':attribute ต้องไม่มีมากกว่า :max ชิ้น.',
        'file' => ':attribute ต้องไม่ใหญ่กว่า :max กิโลไบต์.',
        'numeric' => ':attribute ต้องไม่มีมากกว่า :max.',
        'string' => ':attribute ต้องไม่มีความยาวมากกว่า :max อักขระ.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => ':attribute ต้องมีอย่างน้อย :min ชิ้น.',
        'file' => ':attribute ต้องมีขนาดอย่างน้อย :min กิโลไบต์.',
        'numeric' => ':attribute ต้องอยู่อย่างน้อย :min.',
        'string' => ':attribute ต้องมีความยาวอย่างน้อย :min อักขระ.',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ':attribute ต้องเป็นตัวเลข',
    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'รูปแบบของ :attribute ไม่ถูกต้อง.',
    'required' => ':attribute ต้องระบุ.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => ':attribute ต้องระบุเมื่อ :other เป็น :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => ':attribute ต้องระบุเมื่อ :other ไม่อยู่ใน :values.',
    'required_with' => ':attribute ต้องระบุเมื่อมีค่า :values.',
    'required_with_all' => ':attribute ต้องระบุเมื่อมีค่า :values.',
    'required_without' => ':attribute ต้องระบุเมื่อไม่มีค่า :values.',
    'required_without_all' => ':attribute ต้องระบุเมื่อไม่มีค่าใด ๆ ใน :values.',
    'same' => ':attribute และ :other ต้องตรงกัน.',
    'size' => [
        'array' => ':attribute ต้องมี :size ชิ้น.',
        'file' => ':attribute ต้องมีขนาด :size กิโลไบต์.',
        'numeric' => ':attribute ต้องมีขนาด :size.',
        'string' => ':attribute ต้องมีความยาว :size อักขระ.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => ':attribute ต้องเป็นข้อความ',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => ':attribute ถูกใช้ไปแล้ว.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute must be uppercase.',
    'url' => 'รูปแบบของ :attribute ไม่ถูกต้อง.',
    'ulid' => 'The :attribute must be a valid ULID.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
