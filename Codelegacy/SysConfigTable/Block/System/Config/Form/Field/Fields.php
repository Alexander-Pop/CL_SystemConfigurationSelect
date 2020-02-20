<?php
/* Glory to Ukraine! Glory to the heros! */
namespace Codelegacy\SysConfigTable\Block\System\Config\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

/**
 * Class Active
 *
 * @package Codelegacy\SysConfigTable\Block\System\Config\Form\Field
 */
class Fields extends AbstractFieldArray {

	/**
	 * @var bool
	 */
	protected $_addAfter = TRUE;

	/**
	 * @var
	 */
	protected $_addButtonLabel;

	/**
	 * Construct
	 */
	protected function _construct() {
		parent::_construct();
		$this->_addButtonLabel = __('Add');
	}

	/**
	 * Prepare to render the columns
	 */
	protected function _prepareToRender() {
		$this->addColumn(
			'field_1', 
			['label' => __('Field 1')]
		);
		$this->addColumn(
			'field_2', 
			['label' => __('Field 2')]
		);
		$this->addColumn(
			'field_3', 
			['label' => __('Field 3')]
		);
		$this->addColumn(
			'field_4', 
			['label' => __('Field 4')]
		);
		$this->_addAfter       = FALSE;
		$this->_addButtonLabel = __('Add');
	}
}