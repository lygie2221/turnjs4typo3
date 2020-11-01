<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
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
        'searchFields' => 'settings',
        'iconfile' => 'EXT:turnjs4typo3/Resources/Public/Icons/tx_turnjs4typo3_domain_model_document.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, images, autosize, acceleration, autocenter, direction, display, duration, gradients, height, elevation, page, pages, turncorners, when, width',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, images, autosize, acceleration, autocenter, direction, display, duration, gradients, height, elevation, page, pages, turncorners, when, width, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_turnjs4typo3_domain_model_document',
                'foreign_table_where' => 'AND {#tx_turnjs4typo3_domain_model_document}.{#pid}=###CURRENT_PID### AND {#tx_turnjs4typo3_domain_model_document}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
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
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
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
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'images' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.images',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'images',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 20
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'autosize' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.autosize',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 1,
            ]
        ],
        'acceleration' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.acceleration',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 1,
            ]
        ],
        'autocenter' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.autoCenter',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'direction' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.direction',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['ltr', 'ltr'],
                    ['rtl', 'rtl'],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'display' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.display',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['double', 'double'],
                    ['single', 'single'],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'duration' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.duration',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 600,
            ]
        ],
        'gradients' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.gradients',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 1,
            ]
        ],
        'height' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.height',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0,
            ]
        ],
        'elevation' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.elevation',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0,
            ]
        ],
        'page' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.page',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 1,
            ]
        ],
        'pages' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.pages',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0,
            ]
        ],
        'turncorners' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.turnCorners',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['bl;br', 'bl;br'],
                    ['tl;tr', 'tl;tr'],
                    ['bl;tr', 'bl;tr'],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'when' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.when',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'width' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.width',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0,
            ]
        ],
        'zoom' => [
            'exclude' => true,
            'label' => 'LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_domain_model_document.zoom',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0,
            ]
        ],
    ],
];
