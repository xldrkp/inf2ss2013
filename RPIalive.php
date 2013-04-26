<?php

$alive = '<p style="background: green; color: white; padding: 5px;">Server läuft | IP: 134.28.125.240</p>';
$dead  = '<p style="background: red; color: white; padding: 5px;">Server läuft nicht</p>';

$fd = fsockopen("134.28.125.240",80);

echo $fd ? $alive : $dead;