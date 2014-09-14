<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FPDF Library',
	'description' => 'Provides FPDF Library (www.fpdf.org / v.1.7) for TYPO3 > 6.1',
	'category' => 'misc',
	'author' => 'Heiko Hardt',
	'author_email' => 'heiko.hardt@pixelpark.com',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '0.1.4',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.1.0-6.2.99',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);