<?php

namespace srag\DclExtension\ExternalField;

use srag\DclExtension\ExternalFieldDataType\ExternalFieldDataType;
use srag\DclExtension\ExternalFieldTable\ExternalFieldTable;

/**
 * Class ExternalField
 *
 * @package srag\DclExtension\ExternalField;
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ExternalFieldFactory {

	/**
	 * @var string
	 */
	protected $field_name;
	/**
	 * @var int
	 * @see ExternalFieldDataType
	 *
	 */
	protected $field_input_format;
	/**
	 * @var string
	 * @see ExternalFieldDataType
	 *
	 */
	protected $field_ildb_type;
	/**
	 * @var ExternalFieldTable
	 */
	protected $field_table;


	/**
	 * ExternalFieldFactory constructor.
	 *
	 * @param string             $field_name
	 * @param int                $input_format
	 * @param string             $ildb_type
	 * @param ExternalFieldTable $field_table
	 */
	public static function build(string $field_name, int $input_format, string $ildb_type, ExternalFieldTable $field_table) {

		$data_type = new ExternalFieldDataType($input_format, $ildb_type);
		$field = new ExternalField($field_name, $field_table, $data_type);

		return $field;
	}
}