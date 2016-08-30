<?php
 /**
 * @package jlvkcommunity_messages
 * @author Kunicin Vadim (vadim@joomline.ru)
 * @version 1.0.0
 * @copyright (C) 2016 by JoomLine (http://www.joomline.net)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 *
*/

// No direct access
defined('_JEXEC') or die('Restricted access');

require_once dirname(__FILE__).'/helper.php';
$group_id 	= $params->get('group_id');
$mode 		= $params->get('mode');
$link 		= $params->get('link');
$linknone	= '';

require JModuleHelper::getLayoutPath('mod_jlvkcommunity_messages', $params->get('layout', 'default'));
