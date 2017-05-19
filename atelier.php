<?php
  $var = "bonjour";
  $vr = 88;
  echo "$var\n";
  echo "$vr\n";
  $tab = [];
  $tab = ["foo", "bar", "baz"];
  foreach ($tab as $t) {
    echo "$t\n";
  }

  $asso = [];
  $asso = ["foo" => 1, "bar" => 2, "baz" =>3];
  $json = json_encode($asso);
  echo "$json\n";
 foreach ($asso as $as) {
   echo "$as\n";
  }
 ?>
