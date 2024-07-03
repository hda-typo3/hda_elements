<?php

/*
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */


defined('TYPO3_MODE') or die();
(static function() {
    
    // Add PageTSConfig
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:hda_elements/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig">');
    
    // Register icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    
    $iconRegistry->registerIcon(
        'buttonbox_icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:hda_elements/Resources/Public/Icons/buttonbox.svg']
   );
    
    $iconRegistry->registerIcon(
        'infobox_icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:hda_elements/Resources/Public/Icons/infobox.svg']
    );     
})();
