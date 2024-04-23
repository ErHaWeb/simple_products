<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,slug,description',
        'iconfile' => 'EXT:simple_products/Resources/Public/Icons/tx_simpleproducts_domain_model_product.gif',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'types' => [
        '1' => ['showitem' => 'title, slug, description, price, images, downloads, category, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['label' => '', 'value' => 0],
                ],
                'foreign_table' => 'tx_simpleproducts_domain_model_product',
                'foreign_table_where' => 'AND {#tx_simpleproducts_domain_model_product}.{#pid}=###CURRENT_PID### AND {#tx_simpleproducts_domain_model_product}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'datetime',
                'format' => 'datetime',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'datetime',
                'format' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'title' => [
            'exclude' => false,
            'label' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.title',
            'description' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.title.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'required' => true,
                'default' => ''
            ],
        ],
        'slug' => [
            'exclude' => false,
            'label' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.slug',
            'description' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.slug.description',
            'config' => [
                'type' => 'slug',
                'size' => 50,
                'generatorOptions' => [
                    'fields' => ['title'], // TODO: adjust this field to the one you want to use
                    'fieldSeparator' => '-',
                    'replacements' => [
                        '/' => '',
                    ],
                ],
                'fallbackCharacter' => '-',
                'eval' => 'uniqueInPid',
            ],
            
        ],
        'description' => [
            'exclude' => false,
            'label' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.description',
            'description' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.description.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => 'true',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'price' => [
            'exclude' => false,
            'label' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.price',
            'description' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.price.description',
            'config' => [
                'type' => 'number',
                'format' => 'decimal',
                'size' => 30,
                'default' => 0
            ]
        ],
        'images' => [
            'exclude' => false,
            'label' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.images',
            'description' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.images.description',
            'config' => [
                'type' => 'file',
                'allowed' => 'common-image-types',
            ],
        ],
        'downloads' => [
            'exclude' => false,
            'label' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.downloads',
            'description' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.downloads.description',
            'config' => [
                'type' => 'file',
                'allowed' => 'common-image-types',
            ],
        ],
        'category' => [
            'exclude' => false,
            'label' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.category',
            'description' => 'LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_domain_model_product.category.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_category',
                'size' => 1,
            ],
        ],
    
    ],
];
