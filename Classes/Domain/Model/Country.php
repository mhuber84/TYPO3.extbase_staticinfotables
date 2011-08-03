<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Marco Huber <mail@marco-huber.de>
*  
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 *
 *
 * @package extbase_staticinfotables
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_ExtbaseStaticinfotables_Domain_Model_Country extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * iso2
	 *
	 * @var string
	 */
	protected $iso2;

	/**
	 * iso3
	 *
	 * @var string
	 */
	protected $iso3;

	/**
	 * isoNr
	 *
	 * @var integer
	 */
	protected $isoNr;

	/**
	 * parentTrIsoNr
	 *
	 * @var integer
	 */
	protected $parentTrIsoNr;

	/**
	 * officialNameLocal
	 *
	 * @var string
	 */
	protected $officialNameLocal;

	/**
	 * officialNameEn
	 *
	 * @var string
	 */
	protected $officialNameEn;

	/**
	 * capital
	 *
	 * @var string
	 */
	protected $capital;

	/**
	 * toplevelDomain
	 *
	 * @var string
	 */
	protected $toplevelDomain;

	/**
	 * currencyIso3
	 *
	 * @var string
	 */
	protected $currencyIso3;

	/**
	 * currencyIsoNr
	 *
	 * @var integer
	 */
	protected $currencyIsoNr;

	/**
	 * phone
	 *
	 * @var integer
	 */
	protected $phone;

	/**
	 * euMember
	 *
	 * @var boolean
	 */
	protected $euMember;

	/**
	 * addressFormat
	 *
	 * @var integer
	 */
	protected $addressFormat;

	/**
	 * zoneFlag
	 *
	 * @var integer
	 */
	protected $zoneFlag;

	/**
	 * shortLocal
	 *
	 * @var string
	 */
	protected $shortLocal;

	/**
	 * shortEn
	 *
	 * @var string
	 */
	protected $shortEn;

	/**
	 * unoMember
	 *
	 * @var boolean
	 */
	protected $unoMember;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the iso2
	 *
	 * @return string $iso2
	 */
	public function getIso2() {
		return $this->iso2;
	}

	/**
	 * Sets the iso2
	 *
	 * @param string $iso2
	 * @return void
	 */
	public function setIso2($iso2) {
		$this->iso2 = $iso2;
		return $this;
	}

	/**
	 * Returns the iso3
	 *
	 * @return string $iso3
	 */
	public function getIso3() {
		return $this->iso3;
	}

	/**
	 * Sets the iso3
	 *
	 * @param string $iso3
	 * @return void
	 */
	public function setIso3($iso3) {
		$this->iso3 = $iso3;
		return $this;
	}

	/**
	 * Returns the isoNr
	 *
	 * @return integer $isoNr
	 */
	public function getIsoNr() {
		return $this->isoNr;
	}

	/**
	 * Sets the isoNr
	 *
	 * @param integer $isoNr
	 * @return void
	 */
	public function setIsoNr($isoNr) {
		$this->isoNr = $isoNr;
		return $this;
	}

	/**
	 * Returns the parentTrIsoNr
	 *
	 * @return integer $parentTrIsoNr
	 */
	public function getParentTrIsoNr() {
		return $this->parentTrIsoNr;
	}

	/**
	 * Sets the parentTrIsoNr
	 *
	 * @param integer $parentTrIsoNr
	 * @return void
	 */
	public function setParentTrIsoNr($parentTrIsoNr) {
		$this->parentTrIsoNr = $parentTrIsoNr;
		return $this;
	}

	/**
	 * Returns the officialNameLocal
	 *
	 * @return string $officialNameLocal
	 */
	public function getOfficialNameLocal() {
		return $this->officialNameLocal;
	}

	/**
	 * Sets the officialNameLocal
	 *
	 * @param string $officialNameLocal
	 * @return void
	 */
	public function setOfficialNameLocal($officialNameLocal) {
		$this->officialNameLocal = $officialNameLocal;
		return $this;
	}

	/**
	 * Returns the officialNameEn
	 *
	 * @return string $officialNameEn
	 */
	public function getOfficialNameEn() {
		return $this->officialNameEn;
	}

	/**
	 * Sets the officialNameEn
	 *
	 * @param string $officialNameEn
	 * @return void
	 */
	public function setOfficialNameEn($officialNameEn) {
		$this->officialNameEn = $officialNameEn;
		return $this;
	}

	/**
	 * Returns the capital
	 *
	 * @return string $capital
	 */
	public function getCapital() {
		return $this->capital;
	}

	/**
	 * Sets the capital
	 *
	 * @param string $capital
	 * @return void
	 */
	public function setCapital($capital) {
		$this->capital = $capital;
		return $this;
	}

	/**
	 * Returns the toplevelDomain
	 *
	 * @return string $toplevelDomain
	 */
	public function getToplevelDomain() {
		return $this->toplevelDomain;
	}

	/**
	 * Sets the toplevelDomain
	 *
	 * @param string $toplevelDomain
	 * @return void
	 */
	public function setToplevelDomain($toplevelDomain) {
		$this->toplevelDomain = $toplevelDomain;
		return $this;
	}

	/**
	 * Returns the currencyIso3
	 *
	 * @return string $currencyIso3
	 */
	public function getCurrencyIso3() {
		return $this->currencyIso3;
	}

	/**
	 * Sets the currencyIso3
	 *
	 * @param string $currencyIso3
	 * @return void
	 */
	public function setCurrencyIso3($currencyIso3) {
		$this->currencyIso3 = $currencyIso3;
		return $this;
	}

	/**
	 * Returns the currencyIsoNr
	 *
	 * @return integer $currencyIsoNr
	 */
	public function getCurrencyIsoNr() {
		return $this->currencyIsoNr;
	}

	/**
	 * Sets the currencyIsoNr
	 *
	 * @param integer $currencyIsoNr
	 * @return void
	 */
	public function setCurrencyIsoNr($currencyIsoNr) {
		$this->currencyIsoNr = $currencyIsoNr;
		return $this;
	}

	/**
	 * Returns the phone
	 *
	 * @return integer $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 *
	 * @param integer $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
		return $this;
	}

	/**
	 * Returns the euMember
	 *
	 * @return boolean $euMember
	 */
	public function getEuMember() {
		return $this->euMember;
	}

	/**
	 * Sets the euMember
	 *
	 * @param boolean $euMember
	 * @return void
	 */
	public function setEuMember($euMember) {
		$this->euMember = $euMember;
		return $this;
	}

	/**
	 * Returns the boolean state of euMember
	 *
	 * @return boolean
	 */
	public function isEuMember() {
		return $this->getEuMember();
	}

	/**
	 * Returns the addressFormat
	 *
	 * @return integer $addressFormat
	 */
	public function getAddressFormat() {
		return $this->addressFormat;
	}

	/**
	 * Sets the addressFormat
	 *
	 * @param integer $addressFormat
	 * @return void
	 */
	public function setAddressFormat($addressFormat) {
		$this->addressFormat = $addressFormat;
		return $this;
	}

	/**
	 * Returns the zoneFlag
	 *
	 * @return integer $zoneFlag
	 */
	public function getZoneFlag() {
		return $this->zoneFlag;
	}

	/**
	 * Sets the zoneFlag
	 *
	 * @param integer $zoneFlag
	 * @return void
	 */
	public function setZoneFlag($zoneFlag) {
		$this->zoneFlag = $zoneFlag;
		return $this;
	}

	/**
	 * Returns the shortLocal
	 *
	 * @return string $shortLocal
	 */
	public function getShortLocal() {
		return $this->shortLocal;
	}

	/**
	 * Sets the shortLocal
	 *
	 * @param string $shortLocal
	 * @return void
	 */
	public function setShortLocal($shortLocal) {
		$this->shortLocal = $shortLocal;
		return $this;
	}

	/**
	 * Returns the shortEn
	 *
	 * @return string $shortEn
	 */
	public function getShortEn() {
		return $this->shortEn;
	}

	/**
	 * Sets the shortEn
	 *
	 * @param string $shortEn
	 * @return void
	 */
	public function setShortEn($shortEn) {
		$this->shortEn = $shortEn;
		return $this;
	}

	/**
	 * Returns the unoMember
	 *
	 * @return boolean $unoMember
	 */
	public function getUnoMember() {
		return $this->unoMember;
	}

	/**
	 * Sets the unoMember
	 *
	 * @param boolean $unoMember
	 * @return void
	 */
	public function setUnoMember($unoMember) {
		$this->unoMember = $unoMember;
		return $this;
	}

	/**
	 * Returns the boolean state of unoMember
	 *
	 * @return boolean
	 */
	public function isUnoMember() {
		return $this->getUnoMember();
	}

}
?>