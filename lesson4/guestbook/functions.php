<?php
function getArrOfRecords($path){
  $fh = fopen($path, 'r');
  $i = 0;
  while( !feof($fh) ){
    $lines[$i] = fgets($fh);
    $lines[$i] = str_replace (["\r\n", "\n", "\r"], '', $lines[$i]);
    $i++;
  }
  return $lines;
}


function makeGuestbookRecord($path, $data){
  $fh = fopen($path, 'a');
  $res = fwrite($fh, "\n" . $data);
  fclose($fh);
  return $res;
}
