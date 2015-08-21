<?php
/**
 * Created by PhpStorm.
 * User: Jensenkong
 * Date: 2015/8/21
 * Time: 14:06
 */

//1连接数据库
try{
 $pdo = new PDO("mysql:host=localhost;dbname=testmyself","root","");
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){

 die("数据库连接失败".$e->getMessage());
}

//2 执行数据操作
//开启事务
try{
 $pdo->beginTransaction();
 $sql = "insert into user (id,name,age,sex) values (?,?,?,?)";
 $stmt = $pdo->prepare($sql);
    $datalis = array(array(null,"dfas",23,"男"),
                     array(null,"fasdf",24,"nv"),
                      array(null,"da",25,"nv"),);

 $isCommit = true;
 foreach($datalis as $data){
     $stmt->execute($data);
     if($stmt->errorCode()>0){
         $pdo->rollBack();
         $isCommit = false;
         break;
     }
 }

}catch (PDOException $e){
    die("执行失败".$e->getMessage());
}


if($isCommit){
    //提交事务
    $pdo->commit();

}




