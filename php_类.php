<?php
/*
author:demon
time:2018/1/28
function:php的类

*/

class person
{
  public $id_card;
  public function get_Info(){echo '父类get_Info()调用<hr/>';return $this->id_cadr;}
  function __construct($id_card=0){echo '父类构造函数执行<hr/>'; $this->id_card=$id_card;}
  function __destruct(){echo '父类的析构函数执行<hr/>';}  
}


//1.类的定义
class student
{


   //1.构造函数和析构函数
  function __construct($name=null,$age=null)
  { 
    echo 'student构造函数执行<hr/>';
	$this->name=$name;
	$this->age=$age;
  }
  function __destruct(){ echo 'student析构函数执行<hr/>';}


  //2.属性的定义要指定权限
  private $name;
  private $age;
  
  //3.方法如果不指定权限,默认为public
  function getName(){return $this->name;}
  public function getAge(){return $this->age;}
  
}

//2.类的实例化
$obj=new student('小琴',18);
echo '姓名:'.$obj->getName().'  '.'年龄:'.$obj->getAge().'<hr/>';



//3.类的简单继承 extends

class teacher extends person
{
   public $name;
   function __construct($name,$id_card)
   {
	   parent::__construct($id_card);
	   echo 'teacher构造函数执行<hr/>';
	   $this->name=$name;
	 
   }
   function get_Info()
   {
	   echo '姓名:'.$this->name.'<br/>';
	   echo '身份证:'.$this->id_card.'<hr/>';
   }
   function __destruct() 
   {
	   echo 'teacher的析构函数执行<hr/>';
	   person::__destruct();
   }  
   
   
}

$obj_tch=new teacher('陈小琴',133423949238829);
$obj_tch->get_Info();

?>