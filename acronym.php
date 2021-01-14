<?php

print "Utvecklar förkortningen PHP.\nHur noga vill du vara? ";

$handle = fopen("php://stdin", "r");
$line = trim(fgets($handle));
fclose($handle);

if (is_numeric($line)) {
  $no = intval($line);
  print "\n";
  print "PHP står för:\n";
  print "PHP";
  for ($i = 0; $i < $no; $i += 1) {
    print ": Hypertext Preprocessor";
  }
} else {
  trigger_error("\n$line är inte ett tal.\n", E_USER_ERROR);
}

