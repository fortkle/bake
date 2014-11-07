<?php
namespace Cake\View\Helper;

use Cake\View\Helper;
use Cake\Utility\Inflector;

/**
 * Class helper
 */
class ClassHelper extends Helper {

/**
 * Default configuration.
 *
 * @var array
 */
	protected $_defaultConfig = [];

/**
 * property
 *
 * Used for generating formatted properties such as component and helper arrays
 *
 * @param string $name
 * @param array $value
 * @param array $params
 * @return string
 */
	public function property($name, $value, $params = []) {
		if (!$value) {
			return '';
		}

		foreach($value as &$val) {
			$val = Inflector::camelize($val);
		}
		$params += [
			'name' => $name,
			'value' => $value
		];
		return $this->_View->element('property', $params);
	}

}