<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'hda_elements', 'Configuration/TypoScript/Setup/', 'HDA Elements'
);
