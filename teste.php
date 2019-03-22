<?php

echo "5) ".basename("C:\wamp64\www\robo\teste.php")."\n";

echo dirname("C:\wamp64\www\robo\teste.php")."\n";

$df = disk_free_space("C:");

echo $df;