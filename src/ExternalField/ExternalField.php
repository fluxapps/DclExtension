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
class ExternalField {

	/**
	 * @var string
	 */
	protected $field_name;
	/**
	 * @var ExternalFieldTable
	 */
	protected $field_table;
	/**
	 * @var ExternalFieldDataType
	 */
	protected $field_data_type;
	/**
	 * @var ExternalFieldTable[]
	 *
	 */
	protected $field_relation_table;


	/**
	 * ExternalField constructor.
	 *
	 * @param string                $field_name
	 * @param ExternalFieldTable    $field_table
	 * @param ExternalFieldDataType $field_data_type
	 */
	public function __construct(string $field_name, ExternalFieldTable $field_table, ExternalFieldDataType $field_data_type) {
		$this->field_name = $field_name;
		$this->field_table = $field_table;
		$this->field_data_type = $field_data_type;
	}


	/**
	 * @return string
	 */
	public function getFieldName(): string {
		return $this->field_name;
	}


	/**
	 * @return ExternalFieldTable
	 */
	public function getFieldTable(): ExternalFieldTable {
		return $this->field_table;
	}


	/**
	 * @return ExternalFieldDataType
	 */
	public function getFieldDataType(): ExternalFieldDataType {
		return $this->field_data_type;
	}


	/**
	 * @return ExternalFieldTable[]
	 */
	public function getFieldRelationTable(): array {
		return $this->field_relation_table;
	}


	/**
	 * @param ExternalFieldTable $field_relation_table
	 */
	public function addFieldRelationTable($field_relation_table) {
		$this->field_relation_table[] = $field_relation_table;
	}
}