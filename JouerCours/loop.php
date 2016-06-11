<?php
	shell_exec("sonic_pi < loop.txt");
	sleep(5);
	shell_exec("sonic_pi stop");
?>
