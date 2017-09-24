<?php

$db = new PDO('sqlite:' . realpath(__DIR__) . '/easyt.db');
$fh = fopen(__DIR__.'/schema', 'r');
while ($line = fread($fh, 4096)){
    $db->exec($line);
}
fclose($fh);