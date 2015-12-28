<?php

/**
 * Title: Rabobank - iDEAL Lite config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Rabobank_IDealLite_TestConfig extends Pronamic_WP_Pay_Gateways_Rabobank_IDealLite_Config {
	public function get_payment_server_url() {
		return 'https://idealtest.rabobank.nl/ideal/mpiPayInitRabo.do';
	}
}
