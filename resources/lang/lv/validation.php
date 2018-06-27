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

    'accepted'             => ':attribute jātiek pieņemtam.',
    'active_url'           => ':attribute nav pareiza URL.',
    'after'                => ':attribute jābū pēc :date.',
    'after_or_equal'       => ':attribute jābūt pēc vai vienādam ar :date.',
    'alpha'                => ':attribute drīkst saturēt tikai burtus.',
    'alpha_dash'           => ':attribute drīkst saturēt tikai ciparus un burtus.',
    'alpha_num'            => ':attribute drīkst saturēt tikai ciparus un burtus.',
    'array'                => ':attribute jābū masīvam.',
    'before'               => ':attribute jābūt pirms :date.',
    'before_or_equal'      => ':attribute jābūt pirms vai vienādam ar :date.',
    'between'              => [
        'numeric' => ':attribute jābūt starp :min and :max.',
        'file'    => ':attribute jābūt starp :min and :max kilobytes.',
        'string'  => ':attribute jābū starp :min and :max characters.',
        'array'   => ':attribute jāsatur starp :min un :max lietām.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field must have a value.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'Izvēlētais :attribute ir nepareizs.',
    'numeric'              => ':attribute jābūt skaitlim.',
    'present'              => ':attribute field must be present.',
    'regex'                => ':attribute formāts nav derīgs.',
    'required'             => ':attribute lauks ir prasīts.',
    'required_if'          => ':attribute lauks ir prasīts, kad :other ir :value.',
    'required_unless'      => ':attribute lauks ir prasīts, ja vien :other ir iekš :values.',
    'required_with'        => ':attribute lauks ir prasīts, kad :values pastāv.',
    'required_with_all'    => ':attribute lauks ir prasīts, kad :values pastāv.',
    'required_without'     => ':attribute lauks ir prasīts, kad :values nepastāv.',
    'required_without_all' => ':attribute lauks ir prasīts, kad neviens no :values nepastāv.',
    'same'                 => ':attribute un :other jāsakrīt.',
    'size'                 => [
        'numeric' => ':attribute jābūt :size.',
        'file'    => ':attribute jābūt :size kilobaiti..',
        'string'  => ':attribute jābūt :size rakstzīmes.',
        'array'   => ':attribute jāsatur :size lietas.',
    ],
    'string'               => ':attribute jābū tekstam.',
    'timezone'             => ':attribute jābūt atļautā zonā.',
    'unique'               => ':attribute ir jau aizņemts.',
    'uploaded'             => ':attribute nevarēja ielādēt.',
    'url'                  => ':attribute ir nepareizā formātā.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
