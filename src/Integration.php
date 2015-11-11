<?php

class Pronamic_WP_Pay_Gateways_Rabobank_IDealLite_Integration {
	public function __construct() {
		$this->id         = 'rabobank-ideal-lite';
		$this->name       = 'Rabobank - iDEAL Lite';
		$this->provider   = 'rabobank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_Gateway';
	}
}
