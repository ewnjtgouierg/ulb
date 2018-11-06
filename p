#!/usr/local/bin/php
<?

array_shift($_SERVER['argv']);

passthru("php /F/sys/Forca/.php \"".join('" "', $_SERVER['argv']).'"');