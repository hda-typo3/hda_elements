<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "hda_buttonbox".
 *

 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY]  = array (
  	'title' 			=> 'HDA - Elements',
  	'description' 		=> 'A buttonbox for the h_da',
	'category' 			=> 'templates',
	'author' 			=> 'Michael Lang',
	'author_email' 		=> 'michael.lang@h-da.de',
	'version'           => '11.0.0',
  	'author_company' 	=> 'h_da',
  	'state' 			=> 'alpha',
    'uploadfolder'    	=> false,
    'createDirs'       	=> '',
    'clearCacheOnLoad' 	=> true,
    'constraints' =>
    array (
        'depends' =>
        array (
            'typo3' => '11.5-',
        ),
        'conflicts' =>
        array (
        ),
        'suggests' =>
        array (
        ),
    ),
);

