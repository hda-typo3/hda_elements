<?php
defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'hda_elements', 
		'Configuration/TypoScript/Setup', 
		'HDA-Elements'
);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	'hda_elements',
    	'Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig',
    	'New Elements'
);
