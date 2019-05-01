<?php
date_default_timezone_set("America/New_York");
$fname= "./paste/".date("ydhisms").'.txt';
$myfile = fopen($fname, "w") or die("Unable to create/open file!");
$txt = $_POST["xcode"];
fwrite($myfile, $txt);
fclose($myfile);
$files = glob("./paste/"."*");
$now   = time();

foreach ($files as $file) {
if (is_file($file)) {
  if ($now - filemtime($file) >= 60 * 60 * 5) { // 2 hours
      if ($file != './paste/index.html') { // 2 hours
        unlink ($file);
      }
  }
}
}
?>
<script>
var redir = "<?php echo $fname ?>";
window.location.replace(redir);
</script>
