<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "hda_buttonbox".
 *

 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY]  = [
  	'title' 			=> 'HDA - Elements',
  	'description' 		=> 'A buttonbox for the h_da',
	'category' 			=> 'templates',
	'author' 			=> 'Michael Lang',
  	'author_email' 		=> 'michael.lang@h-da.de',
    'version'           => '1.0.0',
  	'author_company' 	=> 'h_da',
  	'state' 			=> 'alpha',
    'uploadfolder'    	=> false,
    'createDirs'       	=> '',
    'clearCacheOnLoad' 	=> true,
    'constraints'      	=> [
        'depends'   => [
            'typo3'          => '10.4.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
