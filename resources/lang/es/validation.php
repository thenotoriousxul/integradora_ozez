<?php

return [
    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'          => 'El campo :attribute no es una URL válida.',
    'after'               => 'El campo :attribute debe ser una fecha después de :date.',
    'alpha'               => 'El campo :attribute solo puede contener letras.',
    'alpha_dash'          => 'El campo :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num'           => 'El campo :attribute solo puede contener letras y números.',
    'array'               => 'El campo :attribute debe ser un arreglo.',
    'before'              => 'El campo :attribute debe ser una fecha antes de :date.',
    'between'             => [
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe tener entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean'             => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'           => 'La confirmación de :attribute no coincide.',
    'date'                => 'El campo :attribute no es una fecha válida.',
    'date_format'         => 'El campo :attribute no corresponde al formato :format.',
    'different'           => 'Los campos :attribute y :other deben ser diferentes.',
    'digits'              => 'El campo :attribute debe ser de :digits dígitos.',
    'digits_between'      => 'El campo :attribute debe tener entre :min y :max dígitos.',
    'email'               => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'exists'              => 'El seleccionado :attribute no es válido.',
    'file'                => 'El campo :attribute debe ser un archivo.',
    'filled'              => 'El campo :attribute debe tener un valor.',
    'image'               => 'El campo :attribute debe ser una imagen.',
    'in'                  => 'El campo :attribute seleccionado no es válido.',
    'integer'             => 'El campo :attribute debe ser un número entero.',
    'ip'                  => 'El campo :attribute debe ser una dirección IP válida.',
    'json'                => 'El campo :attribute debe ser una cadena JSON válida.',
    'max'                 => [
        'numeric' => 'El campo :attribute no puede ser mayor que :max.',
        'file'    => 'El archivo :attribute no puede pesar más de :max kilobytes.',
        'string'  => 'El campo :attribute no puede tener más de :max caracteres.',
        'array'   => 'El campo :attribute no puede tener más de :max elementos.',
    ],
    'mimes'               => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min'                 => [
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe tener al menos :min caracteres.',
        'array'   => 'El campo :attribute debe tener al menos :min elementos.',
    ],
    'not_in'              => 'El campo :attribute seleccionado no es válido.',
    'numeric'             => 'El campo :attribute debe ser un número.',
    'present'             => 'El campo :attribute debe estar presente.',
    'regex'               => 'El formato del campo :attribute es inválido.',
    'required'            => 'El campo :attribute es obligatorio.',
    'required_if'         => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless'     => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with'       => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'   => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without'    => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los :values está presente.',
    'same'                => 'Los campos :attribute y :other deben coincidir.',
    'size'                => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe tener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'string'              => 'El campo :attribute debe ser una cadena.',
    'timezone'            => 'El campo :attribute debe ser una zona válida.',
    'unique'              => 'El :attribute ya ha sido tomado.',
    'url'                 => 'El formato de :attribute es inválido.',
    'custom'              => [
        'attribute-name' => [
            'rule-name' => 'mensaje personalizado',
        ],
    ],
];
