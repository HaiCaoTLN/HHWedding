<?php

return [
    /**
     * AuthManager.
     */
    \Core\Auth\AuthManager::NAME => [

        'failed' => ':email or :password is incorrect.',
    ],

    /**
     * Time.
     */
    \Core\Support\Time::NAME => [

        'y' => 'year',
        'm' => 'month',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',

        'ago' => 'ago.',
        'recently' => 'recently.',
    ],

    /**
     * Validator.
     */
    \Core\Valid\Validator::NAME => [

        'request' => [
            'required' => ':field required!.',
             'email' => ':field invalid!.',
             'dns' => ':field invalid!.',
             'url' => ':field invalid!.',
             'uuid' => ':field is not uuid!.',
             'int' => ':field must be a number!.',
             'float' => ':field must be decimal!.',
             'min' => ':field min length: :attribute',
             'max' => ':field maxmaximal length: :attribute',
             'equal' => ':field is not the same as :attribute',
             'unique' => ':field already exists!.',
        ],

        'file' => [
            'required' => ':field required!.',
            'min' => ':field min length: :attribute',
            'max' => ':field maxmaximal length: :attribute',
            'mimetypes' => ':field allowed: :attribute',
            'mimes' => ':field allowed: :attribute',
            'unsafe' => ':field indicated as unsafe!.',
            'corrupt' => ':field was not uploaded correctly!.',
        ],
    ]
];
