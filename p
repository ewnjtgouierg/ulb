#!/usr/local/bin/php
<?

$args = $_SERVER['argv'];

array_shift($args);

array_walk($args, function(&$val) {
		$val = str_replace('"', '\\"', $val);
		$val = '"' . $val . '"';
	});

$args = join(' ', $args);

passthru("php /F/sys/Forca/.php $args", $retVal);

exit($retVal);
