<?php

namespace srag\DclExtension\ExternalFieldDataType;

/**
 * Class ExternalFieldDataType
 *
 * @package srag\DclExtension\ExternalField;
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ExternalFieldDataType {

	const INPUTFORMAT_NONE = 0;
	const INPUTFORMAT_NUMBER = 1;
	const INPUTFORMAT_TEXT = 2;
	const INPUTFORMAT_REFERENCE = 3;
	const INPUTFORMAT_BOOLEAN = 4;
	const INPUTFORMAT_DATETIME = 5;
	const INPUTFORMAT_FILE = 6;
	const INPUTFORMAT_RATING = 7;
	const INPUTFORMAT_ILIAS_REF = 8;
	const INPUTFORMAT_MOB = 9;
	const INPUTFORMAT_REFERENCELIST = 10;
	const INPUTFORMAT_FORMULA = 11;
	const INPUTFORMAT_PLUGIN = 12;
	const INPUTFORMAT_NON_EDITABLE_VALUE = 13;
	const INPUTFORMAT_TEXT_SELECTION = 14;
	const INPUTFORMAT_DATE_SELECTION = 15;
	const ILDB_TYPE_INTEGER = "integer";
	const ILDB_TYPE_TEXT = "text";
	const ILDB_TYPE_DATE = "date";
	/**
	 * @var int
	 */
	protected $input_format;
	/**
	 * @var string
	 */
	protected $ildb_type;


	/**
	 * ExternalFieldDataType constructor.
	 *
	 * @param int    $input_format
	 * @param string $il_db_type
	 */
	public function __construct(int $input_format, string $il_db_type) {
		$this->input_format = $input_format;
		$this->ildb_type = $il_db_type;
	}


	/**
	 * @return int
	 */
	public function getInputFormat(): int {
		return $this->input_format;
	}


	/**
	 * @return string
	 */
	public function getIldbType(): string {
		return $this->ildb_type;
	}
}