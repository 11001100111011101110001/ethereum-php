<?php
/**
 * @file
 * This is a file generated by scripts/generate-complex-datatypes.php.
 *
 * DO NOT EDIT THIS FILE.
 *
 * @ingroup generated
 * @ingroup dataTypesComplex
 */
namespace Ethereum\DataType;

use Ethereum\Ethereum;
use Ethereum\EthereumStatic;

/**
 * Ethereum data type Receipt.
 * 
 * Generated by scripts/generate-complex-datatypes.php based on resources/ethjs-schema.json.
 */
class Receipt extends EthDataType {

	/**
	 * Value for 'transactionHash'.
	 */
	public $transactionHash;

	/**
	 * Value for 'transactionIndex'.
	 */
	public $transactionIndex;

	/**
	 * Value for 'blockHash'.
	 */
	public $blockHash;

	/**
	 * Value for 'blockNumber'.
	 */
	public $blockNumber;

	/**
	 * Value for 'cumulativeGasUsed'.
	 */
	public $cumulativeGasUsed;

	/**
	 * Value for 'gasUsed'.
	 */
	public $gasUsed;

	/**
	 * Value for 'contractAddress'.
	 */
	public $contractAddress;

	/**
	 * Value for 'status'.
	 */
	public $status;

	/**
	 * Value for 'logs'.
	 */
	public $logs;

	/**
	 * @param EthD32 $transactionHash
	 * @param EthQ $transactionIndex
	 * @param EthD32 $blockHash
	 * @param EthQ $blockNumber
	 * @param EthQ $cumulativeGasUsed
	 * @param EthQ $gasUsed
	 * @param EthD20 $contractAddress
	 * @param EthQ $status
	 * @param array $logs Array of FilterChange
	 */
	public function __construct(EthD32 $transactionHash = null, EthQ $transactionIndex = null, EthD32 $blockHash = null, EthQ $blockNumber = null, EthQ $cumulativeGasUsed = null, EthQ $gasUsed = null, EthD20 $contractAddress = null, EthQ $status = null, array $logs = null) {
		$this->transactionHash = $transactionHash;  
		$this->transactionIndex = $transactionIndex;  
		$this->blockHash = $blockHash;  
		$this->blockNumber = $blockNumber;  
		$this->cumulativeGasUsed = $cumulativeGasUsed;  
		$this->gasUsed = $gasUsed;  
		$this->contractAddress = $contractAddress;  
		$this->status = $status;  
		$this->logs = $logs;
	}

	/**
	 * Returns a name => type array.
	 */
	public static function getTypeArray() {
		return array( 
			'transactionHash' => 'EthD32',
			'transactionIndex' => 'EthQ',
			'blockHash' => 'EthD32',
			'blockNumber' => 'EthQ',
			'cumulativeGasUsed' => 'EthQ',
			'gasUsed' => 'EthQ',
			'contractAddress' => 'EthD20',
			'status' => 'EthQ',
			'logs' => '[FilterChange]',
		);
	}

	/**
	 * Returns array with values.
	 */
	public function toArray() {
		$return = [];
		(!is_null($this->transactionHash)) ? $return['transactionHash'] = $this->transactionHash->hexVal() : NULL; 
		(!is_null($this->transactionIndex)) ? $return['transactionIndex'] = $this->transactionIndex->hexVal() : NULL; 
		(!is_null($this->blockHash)) ? $return['blockHash'] = $this->blockHash->hexVal() : NULL; 
		(!is_null($this->blockNumber)) ? $return['blockNumber'] = $this->blockNumber->hexVal() : NULL; 
		(!is_null($this->cumulativeGasUsed)) ? $return['cumulativeGasUsed'] = $this->cumulativeGasUsed->hexVal() : NULL; 
		(!is_null($this->gasUsed)) ? $return['gasUsed'] = $this->gasUsed->hexVal() : NULL; 
		(!is_null($this->contractAddress)) ? $return['contractAddress'] = $this->contractAddress->hexVal() : NULL; 
		(!is_null($this->status)) ? $return['status'] = EthereumStatic::removeHexPrefix($this->status) : NULL;
		(!is_null($this->logs)) ? $return['logs'] = Ethereum::valueArray($this->logs, 'FilterChange') : array();
		return $return;
	}
}