<?php
/* @mysql_connect('127.0.0.1','root','');
mysql_select_db('pdo');
mysql_query('set names utf8');
$res=mysql_query('call query_user(18)');
print_r(mysql_fetch_assoc($res));
 */
 $dsn='mysql:dbname=pdo;host=127.0.0.1;charset=utf8';//描述数据源
 $pdo=new PDO($dsn,'root','');//实类化PDO类
 //$pdo->query('set names utf8');//设计字符编码
 //$sth=$pdo->query('delete from students where sid=7');//访问对象里query方法，与query一样的是exec
 //var_dump($sth->fetchAll(2));//fetchAll访问所有记录，3是索引,2为关联，4两个都有
 //echo $sth->rowCount();//数据个数
 
print_r($pdo->query("insert into students(sname,age,cid,lid,sex) values ('张',23,100,1,2)"));
//echo $pdo->lastInsertId(); 
//$sth=$pdo->query('select * from students');
//var_dump($sth->fetchAll(2));
//var_dump($sth->columnCount());
/* print_r($sth->fetchColumn(1)); 
print_r($sth->fetchColumn(1)); */
//$sth=$pdo->prepare('select * from students');
//$sth->execute();//执行sql语句
//print_r($sth->fetchAll(2));