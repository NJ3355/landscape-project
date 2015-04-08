<?php

class siteTemplate {
	static private $output = array();
	static private $watched = array(); //watched variables we can use in the template
	
	public static function render($file) {
		ob_start();
		
		extract(static::$watched, EXTR_SKIP);
		include $file;
		
		static::$output[] = ob_get_clean();
	}
	
	public static function get($name) {
		return static::$watched[$name];
	}
	
	public static function set($name, $value) {
		static::$watched[$name] = $value;
	}
}

ob_start();



register_shutdown_function(function() {
	
});

