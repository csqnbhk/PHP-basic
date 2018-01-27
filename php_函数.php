<?php
 
/*
  author:demon
  time:2018/1/28
  function:php_函数

*/
 
 
 //1.函数定义
 
 function getMax($val_1,$val_2)
 {
   
   return $val_1>$val_2?$val_1:$val_2;
   
 }
 
 //2.函数调用
 echo '<hr/>45和64，较大的数为:'.getMax(45,64).'<hr/>';

?>