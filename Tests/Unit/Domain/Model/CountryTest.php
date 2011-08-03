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
*  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_ExtbaseStaticinfotables_Domain_Model_Country.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Extbase Static Info Tables
 *
 * @author Marco Huber <mail@marco-huber.de>
 */
class Tx_ExtbaseStaticinfotables_Domain_Model_CountryTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_ExtbaseStaticinfotables_Domain_Model_Country
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_ExtbaseStaticinfotables_Domain_Model_Country();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getIso2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIso2ForStringSetsIso2() { 
		$this->fixture->setIso2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getIso2()
		);
	}
	
	/**
	 * @test
	 */
	public function getIso3ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIso3ForStringSetsIso3() { 
		$this->fixture->setIso3('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getIso3()
		);
	}
	
	/**
	 * @test
	 */
	public function getIsoNrReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getIsoNr()
		);
	}

	/**
	 * @test
	 */
	public function setIsoNrForIntegerSetsIsoNr() { 
		$this->fixture->setIsoNr(12);

		$this->assertSame(
			12,
			$this->fixture->getIsoNr()
		);
	}
	
	/**
	 * @test
	 */
	public function getParentTrIsoNrReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getParentTrIsoNr()
		);
	}

	/**
	 * @test
	 */
	public function setParentTrIsoNrForIntegerSetsParentTrIsoNr() { 
		$this->fixture->setParentTrIsoNr(12);

		$this->assertSame(
			12,
			$this->fixture->getParentTrIsoNr()
		);
	}
	
	/**
	 * @test
	 */
	public function getOfficialNameLocalReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOfficialNameLocalForStringSetsOfficialNameLocal() { 
		$this->fixture->setOfficialNameLocal('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOfficialNameLocal()
		);
	}
	
	/**
	 * @test
	 */
	public function getOfficialNameEnReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOfficialNameEnForStringSetsOfficialNameEn() { 
		$this->fixture->setOfficialNameEn('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOfficialNameEn()
		);
	}
	
	/**
	 * @test
	 */
	public function getCapitalReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCapitalForStringSetsCapital() { 
		$this->fixture->setCapital('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCapital()
		);
	}
	
	/**
	 * @test
	 */
	public function getToplevelDomainReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setToplevelDomainForStringSetsToplevelDomain() { 
		$this->fixture->setToplevelDomain('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getToplevelDomain()
		);
	}
	
	/**
	 * @test
	 */
	public function getCurrencyIso3ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCurrencyIso3ForStringSetsCurrencyIso3() { 
		$this->fixture->setCurrencyIso3('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCurrencyIso3()
		);
	}
	
	/**
	 * @test
	 */
	public function getCurrencyIsoNrReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getCurrencyIsoNr()
		);
	}

	/**
	 * @test
	 */
	public function setCurrencyIsoNrForIntegerSetsCurrencyIsoNr() { 
		$this->fixture->setCurrencyIsoNr(12);

		$this->assertSame(
			12,
			$this->fixture->getCurrencyIsoNr()
		);
	}
	
	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForIntegerSetsPhone() { 
		$this->fixture->setPhone(12);

		$this->assertSame(
			12,
			$this->fixture->getPhone()
		);
	}
	
	/**
	 * @test
	 */
	public function getEuMemberReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getEuMember()
		);
	}

	/**
	 * @test
	 */
	public function setEuMemberForBooleanSetsEuMember() { 
		$this->fixture->setEuMember(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getEuMember()
		);
	}
	
	/**
	 * @test
	 */
	public function getAddressFormatReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAddressFormat()
		);
	}

	/**
	 * @test
	 */
	public function setAddressFormatForIntegerSetsAddressFormat() { 
		$this->fixture->setAddressFormat(12);

		$this->assertSame(
			12,
			$this->fixture->getAddressFormat()
		);
	}
	
	/**
	 * @test
	 */
	public function getZoneFlagReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getZoneFlag()
		);
	}

	/**
	 * @test
	 */
	public function setZoneFlagForIntegerSetsZoneFlag() { 
		$this->fixture->setZoneFlag(12);

		$this->assertSame(
			12,
			$this->fixture->getZoneFlag()
		);
	}
	
	/**
	 * @test
	 */
	public function getShortLocalReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setShortLocalForStringSetsShortLocal() { 
		$this->fixture->setShortLocal('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getShortLocal()
		);
	}
	
	/**
	 * @test
	 */
	public function getShortEnReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setShortEnForStringSetsShortEn() { 
		$this->fixture->setShortEn('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getShortEn()
		);
	}
	
	/**
	 * @test
	 */
	public function getUnoMemberReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getUnoMember()
		);
	}

	/**
	 * @test
	 */
	public function setUnoMemberForBooleanSetsUnoMember() { 
		$this->fixture->setUnoMember(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getUnoMember()
		);
	}
	
}
?>