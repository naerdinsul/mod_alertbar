<?php

defined('_JEXEC') or die;

// Get module params
$alerttype = htmlspecialchars( $params->get('alerttype') );
$alertmsg = htmlspecialchars( $params->get('alertmsg') );
$moduleclass_sfx = htmlspecialchars( $params->get('moduleclass_sfx') );

// Display module!
require JModuleHelper::getLayoutPath('mod_alertbar', $params->get('layout', 'default'));
