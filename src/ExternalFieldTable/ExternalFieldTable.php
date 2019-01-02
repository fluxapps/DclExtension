<?php

namespace srag\DclExtension\ExternalFieldTable;

use srag\DclExtension\ExternalField\ExternalField;

/**
 * Class ExternalFieldTable
 *
 * @package srag\DclExtension\ExternalFieldTable;
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ExternalFieldTable {

	/**
	 * @var string
	 */
	protected $table_name;
	/**
	 * @var string
	 */
	protected $field_name;


	/**
	 * ExternalFieldTable constructor.
	 *
	 * @param string $table_name
	 * @param string $primary_key
	 */
	public function __construct(string $table_name, string $primary_key) {
		$this->table_name = $table_name;
		$this->primary_key = $primary_key;
	}


	/**
	 * @return string
	 */
	public function getTableName(): string {
		return $this->table_name;
	}


	/**
	 * @return ExternalField
	 */
	public function getPrimaryKey(): string {
		return $this->primary_key;
	}
}