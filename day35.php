<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/16 0016
 * Time: 8:17
 */
function FirstNotRepeatingChar($str)
{
    $a = array(); //1、两个数组，一个存字母，一个存字母出现的次数
    $b = array(a,b,1,2,3);
    for($i=0;$i<strlen($str);$i++){
               if(!isset($a[$str[$i]])){ //2、isset函数的使用
                       $a[$str[$i]] = 1;
            $b[$str[$i]] = $i;
        }else{
                       $a[$str[$i]] ++;
        }
     }
     foreach($a as $k=>$v){
                 if($v==1){
                         return $b[$k];
        }
    }
  return -1;
}