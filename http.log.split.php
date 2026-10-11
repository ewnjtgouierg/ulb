#!/usr/local/bin/php
<?

$log = fopen("/var/log/http.log.split.log", 'a');

while (!feof(STDIN) && ($line = fgets(STDIN)) !== false)
	{
		list($hostname, $line) = explode(" ", $line, 2);

		fputs($log, "$line\n");

		if (!preg_match("/^[a-zA-Z0-9.-]+$/", $hostname)) continue;	// safety check	

		$logType = $_SERVER['argv'][1];

		if (!$fp[$hostname][$logType])
			{
				$path = "/var/log/http/$hostname/$logType";
				if (!is_dir($dir = dirname($path))) mkdir($dir);
				$fp[$hostname][$logType] = fopen($path, 'a');
			}

		fputs($fp[$hostname][$logType], $line);
	}