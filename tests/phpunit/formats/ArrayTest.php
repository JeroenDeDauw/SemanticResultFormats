<?php

namespace SRF\Test;

use SMW\Test\ResultPrinterTestCase;

/**
 * Tests for the SRF\Array class.
 *
 * @file
 * @since 1.8
 *
 * @ingroup SemanticResultFormats
 * @ingroup Test
 *
 * @group SRF
 * @group SMWExtension
 * @group ResultPrinters
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class ArrayTest extends ResultPrinterTestCase {

	/**
	 * @see ResultPrinterTest::getFormats
	 *
	 * @since 1.8
	 *
	 * @return array
	 */
	public function getFormats() {
		return array( 'array' );
	}

	/**
	 * @see ResultPrinterTest::getClass
	 *
	 * @since 1.8
	 *
	 * @return string
	 */
	public function getClass() {
		return '\SRFArray';
	}

}
