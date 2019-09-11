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

    'accepted'             => ':attribut doit être accepté.',
    'active_url'           => ':attribute n\'est pas une URL valide.',
    'after'                => ':attribute doit être une date après :date.',
    'after_or_equal'       => ':attribute doit être une date après ou égale à :date.',
    'alpha'                => ':attribute ne peut contenir que des lettres.',
    'alpha_dash'           => ':attribute ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num'            => ':attribute ne peut contenir que des lettres et des chiffres.',
    'array'                => ':attribute doit être un tableau.',
    'before'               => ':attribute doit être une date antérieure à :date.',
    'before_or_equal'      => ':attribute doit être une date antérieure ou égale à :date.',
    'between'              => [
        'numeric' => ':attribute doit être compris entre :min et :max.',
        'file'    => ':attribute doit être compris entre :min et :max kilo-octets.',
        'string'  => ':attribute doit être compris entre :min et :max caractères.',
        'array'   => ':attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean'              => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'            => ':attribute confirmation ne correspond pas.',
    'date'                 => ':attribute n\'est pas une date valide.',
    'date_format'          => ':attribute ne correspond pas au format :format.',
    'different'            => ':attribute et :other doit être différent.',
    'digits'               => ':attribute doit contenir :digits chiffres.',
    'digits_between'       => ':attribute doit être compris entre :min et :max chiffres.',
    'dimensions'           => ':attribute a des dimensions d\'image non valides.',
    'distinct'             => 'Le champ :attribute a une valeur en double.',
    'email'                => ':attribute doit être une adresse e-mail valide.',
    'exists'               => ':attribute sélectionné est invalide.',
    'file'                 => ':attribute doit être un fichier.',
    'filled'               => 'Le champ :attribute doit avoir une valeur.',
    'image'                => ':attribute doit être une image.',
    'in'                   => ':attribute sélectionné est invalide.',
    'in_array'             => 'le champ :attribute n\'existe pas dans :other.',
    'integer'              => ':attribute doit être un entier.',
    'ip'                   => ':attribute doit être une adresse IP valide.',
    'ipv4'                 => ':attribute doit être une adresse IPv4 valide.',
    'ipv6'                 => ':attribute doit être une adresse IPv6 valide.',
    'json'                 => ':attribute doit être un JSON valide.',
    'max'                  => [
        'numeric' => ':attribute ne peut pas être supérieur à :max.',
        'file'    => ':attribute ne peut pas être supérieur à :max kilo-octets.',
        'string'  => ':attribute ne peut pas être supérieur à :max caractères.',
        'array'   => ':attribute ne peut pas avoir plus de :max éléments.',
    ],
    'mimes'                => ':attribute doit être un fichier de type : :values.',
    'mimetypes'            => ':attribute doit être un fichier de type : :values.',
    'min'                  => [
        'numeric' => ':attribute doit être au moins :min.',
        'file'    => ':attribute doit être au moins :min kilo-octets.',
        'string'  => ':attribute doit être au moins :min caractères.',
        'array'   => ':attribute doit avoir au moins :min éléments.',
    ],
    'not_in'               => ':attribute sélectionné est invalide.',
    'numeric'              => ':attribute doit être un nombre.',
    'present'              => 'Le champ :attribute doit être présent.',
    'regex'                => 'le format de :attribute est invalide.',
    'required'             => 'Le champ :attribute is obligatoire.',
    'required_if'          => 'Le champ :attribute est obligatoire lorsque :other correspond à :value.',
    'required_unless'      => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with'        => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all'    => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_without'     => 'Le champ :attribute est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est obligatoire lorsqu\'aucune :values suivantes ne sont présentes.',
    'same'                 => ':attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => ':attribute doit être :size.',
        'file'    => ':attribute doit être :size kilo-octets.',
        'string'  => ':attribute doit être :size caractères.',
        'array'   => ':attribute doit contenir :size éléments.',
    ],
    'string'               => ':attribute doit être une chaine de caractères.',
    'timezone'             => ':attribute doit être une zone valide.',
    'unique'               => ':attribute a déjà été pris.',
    'uploaded'             => ':attribute à échoué à envoyer.',
    'url'                  => 'Le format de :attribute est invalide.',

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
