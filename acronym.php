<?php

if (count($argv) == 2) {
  $line = $argv[1];
} else {
  print "Utvecklar förkortningen PHP.\nHur noga vill du vara? ";
  
  $handle = fopen("php://stdin", "r");
  $line = trim(fgets($handle));
  fclose($handle);
  print "\n";
}

if (is_numeric($line)) {
  $no = intval($line); 
  print "PHP står för:\n";
  print "PHP";
  for ($i = 0; $i < $no; $i += 1) {
    print ": Hypertext Preprocessor";
  }
  print "\n";
} else {
  trigger_error("\n$line är inte ett tal.\n", E_USER_ERROR);
}
