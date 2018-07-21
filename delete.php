<?php
// this deletes all the paste files in case the service is abused
$files = glob("./paste/"."*");
foreach ($files as $file) {
if (is_file($file)) {
  if ($file != './paste/index.html') { // 2 hours
    unlink ($file);
  }
}
}
?>
<img src="https://2no.co/1AmNN6" alt="Stats" border="0">
Executed!
