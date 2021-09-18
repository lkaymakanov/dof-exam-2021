<?php

  if (!isset($_ENV["APP_VARIABLE"])) 
  {
    print "Hello, Brave One!\nIt appears that you forgot to initialize the APP_VARIABLE variable ...\n";
  }
  else
  {
    print "Hello, ".$_ENV["APP_VARIABLE"]."!\nCongratulations! You made it! :)\n";
  }
?>
