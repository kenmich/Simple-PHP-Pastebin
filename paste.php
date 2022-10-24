<?php
$fname= "./p/".date("ms").'.txt';
$myfile = fopen($fname, "w") or die("Unable to create/open file!");
$txt = $_POST["xcode"];
fwrite($myfile, $txt);
fclose($myfile);
$files = glob("./p/"."*");
$now   = time();

foreach ($files as $file) {
  if (is_file($file)) {
    if ($now - filemtime($file) >= 60 * 60 * 1) {
        if ($file != './index.html') {
          unlink ($file);
        }
    }
  }
}

Header("Location: $fname");
?>
