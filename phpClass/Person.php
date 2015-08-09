<?php
/**
 * Created by PhpStorm.
 * User: Jensenkong
 * Date: 2015/8/9
 * Time: 10:11
 */

class Person {

    /**
     * @param string $name  定义人名
     * @param int $age   定义年龄
     */
    public function  __construct($name,$age){
        $this->_name=$name;
        $this->_age=$age;
    }


    public function getAge(){
            return $this->_age;
    }
    public function getName(){
    return $this->_name;
    }

    function getFile(){
        echo '该文件位于'.__FILE__;
    }

    function getDir(){
        date_default_timezone_set('Asia/Shanghai');
        echo date('Y-m-d H:i:s').'</br>';
        echo '该文件位于'.__DIR__;
    }
    private $_name,$_age;
}

