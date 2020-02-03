<?php
if(!strpos($argv[1], "s")){
    exit("Geen tijd Gevonden");
}
$out = str_replace("s", " seconden", $argv[1]);
echo($out);
?>