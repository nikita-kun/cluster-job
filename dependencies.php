#!/usr/bin/php
<?php

/* Config dependencies */
$apt = array("install" => ["python3", "python3-pip", 'screen',"libgmp-dev","libmpfr-dev", "libmpc-dev"],
	"remove" => ["apport", "network-manager-config-connectivity-ubuntu"]);

$pip3 = array("install" => ["scipy", "sympy", "timeout-decorator", "gmpy", "gmpy2"]);

echo("Downloading dependencies\n");
foreach ($apt as $command => $values){
	system("sudo apt --yes $command ".implode($values, " "));
}

foreach ($pip3 as $command => $values){
        system("pip3 $command ".implode($values, " "));
}

