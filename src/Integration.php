<?php

/**
 * Title: Rabobank - iDEAL Lite integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Rabobank_IDealLite_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		parent::__construct();

		$this->id         = 'rabobank-ideal-lite';
		$this->name       = 'Rabobank - iDEAL Lite';
		$this->provider   = 'rabobank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Rabobank_IDealLite_ConfigFactory';
	}
}
