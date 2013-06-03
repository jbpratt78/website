<?php
namespace Destiny\Utils;

use Destiny\Utils\Country;

class Tpl {

	public static function out($var){
		return htmlentities ( $var, ENT_QUOTES, 'UTF-8' );
	}

	public static function flag($code) {
		$country = Country::getCountryByCode ( $code );
		return (! empty ( $country )) ? '<i title="' . self::out ( $country->name ) . '" class="flag flag-' . self::out ( strtolower ( $code ) ) . '"></i>' : '';
	}
	
	public static function n($number){
		return number_format($number);
	}
	
	public static function subIcon($output){
		return ($output) ? '<i class="icon-bobross" title="Subscriber"></i>' : '';
	}
	
}