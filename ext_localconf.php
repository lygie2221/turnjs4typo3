<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Turnjs4typo3',
            'Turnjs4typo3',
            [
                Te\Turnjs4typo3\Controller\DocumentController::class => 'list, show'
            ],
            // non-cacheable actions
            [
                Te\Turnjs4typo3\Controller\DocumentController::class => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    turnjs4typo3 {
                        iconIdentifier = turnjs4typo3-plugin-turnjs4typo3
                        title = LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_turnjs4typo3.name
                        description = LLL:EXT:turnjs4typo3/Resources/Private/Language/locallang_db.xlf:tx_turnjs4typo3_turnjs4typo3.description
                        tt_content_defValues {
                            CType = list
                            list_type = turnjs4typo3_turnjs4typo3
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'turnjs4typo3-plugin-turnjs4typo3',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:turnjs4typo3/Resources/Public/Icons/user_plugin_turnjs4typo3.svg']
			);
		
    }
);
