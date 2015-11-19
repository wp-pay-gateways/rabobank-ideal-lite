<?php

class Pronamic_WP_Pay_Gateways_Rabobank_IDealLite_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		$this->id         = 'rabobank-ideal-lite';
		$this->name       = 'Rabobank - iDEAL Lite';
		$this->provider   = 'rabobank';
		$this->deprecated = true;
	}
}
