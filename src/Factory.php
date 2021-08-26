<?php
/**
 *	@package PDFRenderer\Asset
 *	@version 1.0.1
 *	2018-09-22
 */

namespace McGuffin\Asset;

if ( ! defined('ABSPATH') ) {
	die('FU!');
}

use McGuffin\Core;

class Factory {
	/**
	 *	@var Core\CoreInterface
	 */
	private $core = null;

	public static function get( $core ) {
		return new self( $core );
	}

	/**
	 *	@param CoreInterface $core
	 */
	 private function __construct( Core\CoreInterface $core ) {

 		$this->core = $core;

	}
	/**
	 *	@param String $asset
	 */
	public function asset( $asset ) : Asset {
		return Asset::get( $asset, $this->core );
	}

}
