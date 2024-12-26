<?php

var_dump((bool) "");   // bool(false)
echo "\n";
var_dump((bool) "0");  // bool(false)
echo "\n";
var_dump((bool) "1");  // bool(true)
echo "\n";
var_dump((bool) 0);    // bool(false)
echo "\n";
var_dump((bool) 1);    // bool(true)
echo "\n";
var_dump((bool) -1);   // bool(true)
echo "\n";
var_dump((bool) 0.0);  // bool(false)
echo "\n";
var_dump((bool) array()); // bool(false)
echo "\n";
var_dump((bool) array(1)); // bool(true)
echo "\n";
var_dump((bool) null); // bool(false)