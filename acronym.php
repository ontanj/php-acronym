<?php

print "Utvecklar förkortningen PHP.\nHur noga vill du vara? ";

$handle = fopen("php://stdin", "r");
$line = trim(fgets($handle));

if (is_numeric($line)) {
  $no = intval($line);
  $expansion = expand($line);
  print "\n";
  print "PHP står för:\n";
  print "$expansion\n";
} else {
  trigger_error("\n$line är inte ett tal.\n", E_USER_ERROR);
}

fclose($handle);

function expand($no) {
  if ($no <= 0) {
    return "PHP";
  } else {
    return expand(--$no) . ": Hypertext Preprocessor";
  }
} 
