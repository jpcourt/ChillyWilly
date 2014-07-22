<?php

	require_once 'file_lib.php';

	$file_list = glob("input/*");

	//print_r($file_list);

	$parameters = '-r 24 ';

	foreach ($file_list as $file) {
		$log = shell_exec('ffmpeg -i '.$file.$parameters.str_replace('input/', 'output/', $file));
	}

	write_file('log.txt', $log);

?>