<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/15 0015
 * Time: 8:21
 */
$array1 = array('a','b');
$array2 = array('a'=>array('1','2'),'b'=>array('3','4'));
$array2['a'][] = $array1;
print_r($array2);
