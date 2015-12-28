<?php

/**
 * Title: Rabobank - iDEAL Lite - Config test test
 * Description:
 * Copyright: Copyright (c) 2005 - 2014
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Rabobank_IDealLite_TestConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_Rabobank_IDealLite_TestConfig();

		$expected = 'https://idealtest.rabobank.nl/ideal/mpiPayInitRabo.do';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
