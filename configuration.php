<?php

$configuration = array();

$configuration['pathApplication'] = dirname(__FILE__) . '/';

$configuration['basePath'] = '/';

$configuration['includeDirectories'] = array(
	$configuration['pathApplication'],
	$configuration['pathApplication'] . '../nacho/'
);

$configuration['Request'] = array(
	'defaultQuery' => 'Static/show/index',
	'aliasQueries' => array()
);

$configuration['debugMode'] = FALSE;