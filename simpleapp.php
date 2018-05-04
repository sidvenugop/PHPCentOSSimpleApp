<?php
  $data = shell_exec('uptime');
  $uptime = explode(' up ', $data);
  $uptime = explode(',', $uptime[1]);
  $uptime = $uptime[0];

  echo "yo World !  You have successfully deployed your PHP application. Server Uptime $uptime" ;
?>
