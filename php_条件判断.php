<?php
/*
  author:demon
  time:2018/1/28
  function:php的条件判断(和C差不多）

*/

 $flag=1;
 //1.if 
 if($flag==1)
 echo 'flag=1'.'<br/>';
 echo '<hr/>';
 $flag=2;
 
 //2.if else
 if($flag==1)
 echo '$flag=1'.'<br/>';
 else
 echo '$flag!=1'.'<br/>';
 $flag=3;
 echo '<hr/>';
 
 //3.if elseif else
 if($flag==1)
 echo '$flag=1'.'<br/>';
 elseif($flag==2)
 echo '$flag=2'.'<br\>';
 else
 echo '其它可能!'.'<br/>';
 echo '<hr/>';

 //4.switch
 switch($flag)
 {
	 case 1:
	     echo '$flag=1'.'<br/>';
	 break;
	 case 2:
	     echo '$flag=2'.'<br/>';
	 break;
	 default:
	     echo '其它可能!'.'<br/>';
	 break;
 }
 echo '<hr/>';


?>