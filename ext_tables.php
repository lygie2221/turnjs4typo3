<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        $_EXTKEY="turnjs4typo3";


        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Te.Turnjs4typo3',
            'Turnjs4typo3',
            'TurnJS4Typo3'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('turnjs4typo3', 'Configuration/TypoScript', 'TurnJs4Typo3');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_turnjs4typo3_domain_model_document', 'EXT:turnjs4typo3/Resources/Private/Language/locallang_csh_tx_turnjs4typo3_domain_model_document.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_turnjs4typo3_domain_model_document');

        $extensionName = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY));
        $pluginName = strtolower('TurnJS4Typo3');
        $pluginSignature = $extensionName.'_'.$pluginName;
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY . '/Configuration/FlexForms/controllerAction.xml');

    }
);
