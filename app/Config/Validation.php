<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $item = [
        'name' => [
            'rules' => 'required|min_length[3]',
        ],
        'price' => [
            'rules' => 'required|is_natural',
        ],
        'stock' => [
            'rules' => 'required|is_natural',
        ],
        'image' => [
            'rules' => 'required|uploaded[image]',
        ]];
    public $item_errors = [
            'name' => [
                'required' => '{field} Harus Diisi !',
                'min_length' => '{field} Minimum 3 Karakter !',
            ],
            'price' => [
                'required' => '{field} Harus Diisi !',
                'is_natural' => '{field} Hanya Angka !',
            ],
            'stock' => [
                'required' => '{field} Harus Diisi !',
                'is_natural' => '{field} Hanya Angka  !',
            ],
            'image' => [
                'uploaded' => '{field} Harus Diupload !',
            ],
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
