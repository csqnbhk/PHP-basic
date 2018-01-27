<?php
/*
  author:demon
  time:2018/1/28
  function:php的几种循环

*/
 
 //1.for 
 for($i=1;$i<10;$i++)
 {
   echo $i, '  ';
 }
 echo '<hr/>';
 
 //2.while
 $i=1;
 while($i<10)
 {
	 echo $i++.'  ';
 }
 echo '<hr/>';
 
 //3.do while
 $i=1;
 do{
	 echo $i++.'  ';
 }while($i<10);
 echo '<hr/>';
 
 //4.foreach(一般用来遍历数组）
 $val=array(1,3,5,7,9);
 foreach($val as $array_key=>$array_value)
 {
	 echo 'val['.$array_key.']'.'='.$array_value.'  ';
 }
 echo '<hr/>';
 

?>