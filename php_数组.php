<?php
 /*
  author:demon
  time:2018/1/28
  function:php数组
  
*/
 
 //1.数组创建
  
  $array_1=array(1,3,5,7,9);
  $array_2=array('中国'=>'北京','日本'=>'东京','美国'=>'纽约');
  $array_3=array();
  $array_3[0]=1;
  $array_3[3]=3;;
  $array_3[5]=5;
   
   
 //2.索引数组遍历
 for($i=0;$i<count($array_1);$i++)
 {
   echo $array_1[$i].'  ';
 }
 echo '<hr/>';
 echo 'array_3数组一共有:'.count($array_3).'个元素'.'<br/>';
 foreach($array_3 as $val)
 {
   echo $val. '  ';
 }
 echo '<hr/>';
 //3.关联数组的遍历
 foreach($array_2 as $key=>$val)
 {
	 echo 'array_2['.$key.']'.'='.$val.'  ';
 }
 echo '<hr/>';
  


?>