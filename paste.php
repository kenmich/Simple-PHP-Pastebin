<?php
$fname= "./paste/".date("ydhisms").'.txt';
$myfile = fopen($fname, "w") or die("Unable to create/open file!");
$txt = $_POST["xcode"];
fwrite($myfile, $txt);
fclose($myfile);
$files = glob("./paste/"."*");
$now   = time();

foreach ($files as $file) {
  if (is_file($file)) {
    if ($now - filemtime($file) >= 60 * 60 * 5) {
        if ($file != './index.html') {
          unlink ($file);
        }
    }
  }
}

Header("Location: /..");
?>
