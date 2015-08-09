<?php
/**
 * Created by PhpStorm.
 * User: Jensenkong
 * Date: 2015/8/9
 * Time: 10:10
 */

require_once 'Person.php';

$m2 = new Person("Jensenkong",27);
echo $m2->getName().$m2->getAge().'</br>';
echo $m2->getFile();
echo $m2->getDir();



