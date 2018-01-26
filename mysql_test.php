<?php
  /*
  *author:demon
  *time:2018/1/26
  *function:测试PHP连接mysql，并简单遍历结果集几种方法(
  *关联数组）1.mysqli_fetch_assoc()
  *关联索引）2.mysqli_fetch_row()
  *两者结合）3.mysqli_fetch_array()  
  *                                                       )
  */
  echo'开始连接mysql.....'.'<br/>';
  //1.连接数据库
  $conn=mysqli_connect('localhost','root','123456') or die("call mysqli_connect() error" . mysqli_error($link));
  mysqli_select_db($conn,'books');
  if($conn==FALSE)
  echo'连接失败!'.'<br/>';
  else
  echo'连接成功'.'<br/>';
  $sql="select*from book_250";
  //2.执行sql语句查询并获得结果集
  echo'book_250表的数据如下:'.'<hr/>';
  $result=mysqli_query($conn,$sql) or die ('call mysqli_query() error.'. mysqli_error($conn));
  //3.遍历结果集输出数据
  
  //方法1:：使用mysqli_fetch_assoc() 关联数组
  
  while($row=mysqli_fetch_assoc($result))
  {
	  echo $row['name'].'  '.$row['grade'].'  '.$row['person'].'<hr/>';
  }
  
  //方法2：使用mysqli_fetch_row()    关联索引
  
  /*
  while($row=mysqli_fetch_row($result))
  {
	  for($col=0;$col<count($row);$col++)
	  {
          echo $row[$col].'  ';
	  }
	  echo '<hr/>';
  }
  */
  
  
  //3.方法3：mysqli_fetch_array()  关联数组和索引数组结合使用(占用较多内存）
  
  /*
  while($row=mysqli_fetch_array($result))
  {
	 
	  
	  //1.关联数组遍历
	  //echo $row['name'].'  '.$row['grade'].'  '.$row['person'].'<hr/>';
	  
	  //2.关联索引遍历
	  
	  for($col=0;$col<count($row);$col++)
	  {
		  echo $row[$col].'  ';
	  }
	  echo '<hr/>';
	  
  }
  */
  
  //释放结果集和关闭连接
  mysqli_free_result($result);
  mysqli_close($conn);

?>