<h2>
Recovered Crontab:
</h2>
<pre>
<?php

$crontab = file_get_contents('crontab_log.txt');
//$crontab = nl2br($crontab);

preg_match_all("/\(([USER)]+)\)\ CMD\ \(([^\)]+)\)/", $crontab, $matches, PREG_SET_ORDER);
foreach ($matches as $key => $value) {
  
	//echo $value[2]. "\n";
	$crontab_commands[]=$value[2];
}
$crontab_commands = array_unique($crontab_commands);
foreach ($crontab_commands as $key => $value) {
	echo $value."\n";
}

?>
</pre>
