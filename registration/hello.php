<?php
$str = "The quick brown fox jumped over the lazy dog";
$str = preg_replace('/[^\w\s]/', '', $str);
echo $str;