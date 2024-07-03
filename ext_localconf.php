<?php

defined('TYPO3') || die('Access denied.');

call_user_func(static function () {

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
		\TYPO3\CMS\Core\Imaging\IconRegistry::class
	);

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

	
});
