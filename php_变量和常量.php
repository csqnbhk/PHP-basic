<?php

/*
author:demon
time:2018/1/28
function:php的变量和常量

*/

//1.变量
   
  //1.变量定义
  $val=12;
  echo $val.'<hr/>';
  
  //2.全局变量 global
  $global_val=88;
  
  //3.局部变量 local
  function test()
  {
    $local_val=77;
	echo $local_val.'<br/>';
	//要输出global变量，要使用global导入
	global $global_val;
	echo $global_val.'  '.'要在局部作用域输出global变量，要使用global导入改变量。<hr/>';
  }
  test();
  echo $local_val.'不能把局部变量作用域扩展到全局作用域<hr/>';

//2.常量
   
   //1.常量的定义 
   /*
     define(string name,mixed value,[bool case_insensitive=false]) //记得默认大小写是敏感的，要使其不敏感，改为true
   
   */
   define('SERVER_NAME','PHP引擎');
   echo '默认区分大小写<br/>';
   echo SERVER_NAME.'<br/>';//前面不须使用$符号
   echo server_name.'<hr/>';
   
   
   define('SERVER_PORT','mysql端口',true);
   echo '指定第三个参数为true，则不区分大小写<br/>';
   echo SERVER_PORT.'<br/>';
   echo server_port.'<hr/>';
  
   function test1()
   {
	   echo '常量可以在其定义以下作用域调用:'.SERVER_NAME.'<hr/>';
   }
   test1();
?>