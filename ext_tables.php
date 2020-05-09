<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Te.Turnjs4typo3',
            'Turnjs4typo3',
            'TurnJS4Typo3'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('turnjs4typo3', 'Configuration/TypoScript', 'TurnJs4Typo3');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_turnjs4typo3_domain_model_document', 'EXT:turnjs4typo3/Resources/Private/Language/locallang_csh_tx_turnjs4typo3_domain_model_document.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_turnjs4typo3_domain_model_document');

    }
);
