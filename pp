#!/usr/local/bin/php
<?

array_shift($_SERVER['argv']);

passthru("php /F/sys/Forca/.php /ours/run \"".join('" "', $_SERVER['argv']).'"');