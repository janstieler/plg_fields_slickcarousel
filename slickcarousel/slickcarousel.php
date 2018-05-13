<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Slickcarousel
 *
 * @copyright   Copyright (C) 2017 NAME. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::import('components.com_fields.libraries.fieldslistplugin', JPATH_ADMINISTRATOR);

class PlgFieldsSlickcarousel extends FieldsListPlugin {

	public function onCustomFieldsPrepareDom($field, DOMElement $parent, JForm $form) {
		$fieldNode = parent::onCustomFieldsPrepareDom($field, $parent, $form);
		if (!$fieldNode) {
			return false;
		}

		$fieldNode->setAttribute('directory', 'images/');
		$fieldNode->setAttribute('hide_default', true);
		$fieldNode->setAttribute('hide_none', true);

		return $fieldNode;
	}

}
