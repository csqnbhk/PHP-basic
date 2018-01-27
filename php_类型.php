<?php
 
 /*
   author:demon
   time:2018/1/28
   function:php_数据类型

 */
 
 //1.基本类型(整形(int),浮点型(float)，布尔型(bool)，字符串(string))
   
     //1.int
	 $int=66;
	 var_dump($int);
     echo '<br/>'.PHP_INT_MAX.'<hr/>';
	 
	 //2.float
	 $float=6.21;
	 var_dump($float);
	 echo '<br/>'.PHP_FLOAT_MAX.'<hr/>';
	 
	 //3.bool
	 $bool=true;
	 var_dump($bool);
	 echo '<hr/>';
	
	//4.string
	$string='对酒当歌,人生几何';
	var_dump($string);
	echo '<hr/>';
	
	
	
 
 //2.复合类型（数组，对象）
     
   //1.array
   $array=array(1,2,3,4,5);
   var_dump($array);
   echo '<hr/>';
   
   //2.object
   class student
   {
	   static public $flag=1;
	  private $age;
	  function getAge()
	  {
		return $this->age;
	  }
   }
   $obj=new student();
   var_dump($obj);
   echo '<hr/>';
   
 
 //3.特殊类型（资源，NULL)
   

   //1.resource
   $fp=fopen('php_函数.php','r');
   var_dump(fp);
   echo '<br/>输出是string，但是其实它是一个资源';
   echo '<hr/>';
 
  //2.NULL(1.声明的变量未赋值 2.声明的变量赋值为null 3.使用unset重置变量）
  $val_1;
  $var_2=NULL;
  $var_3=2;
  
  echo '没赋值之前var_1类型为:';
  var_dump($var_1);
  $var_1=12;
  echo '<br/>赋值之后var_1类型为:';
  var_dump($var_1);
  
  echo '<br/>为var_2重新赋值之前类型为:';
  var_dump($var_2);
  $var_2=74.23;
  echo '<br/>为var_2重新赋值之后类型为:';
  var_dump($var_2);
  
  echo '<br/>使用unset之前var_3类型为:';
  var_dump($var_3);
  echo '<br/>使用unset之后var_3类型为:';
  unset($var_3);
  var_dump($var_3);
  echo '<hr/>';
 
?>