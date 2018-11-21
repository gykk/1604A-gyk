<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/21 0021
 * Time: 8:21
 */
$i = 0; //存储对比的次数
//@param 待查找数组
//@param 待搜索的数字
function binsearch($arr,$num){
    $count = count($arr);
    $lower = 0;
    $high = $count - 1;
    global $i;
    while($lower <= $high){
        $i ++; //计数器
        if($arr[$lower] == $num){
            return $lower;
        }
        if($arr[$high] == $num){
            return $high;
        }
        $middle = intval(($lower + $high) / 2);
        if($num < $arr[$middle]){
            $high = $middle - 1;
        }else if($num > $arr[$middle]){
            $lower = $middle + 1;
        }else{
            return $middle;
        }
    }
    //返回-1表示查找失败
    return -1;
}
$arr = array(0,1,16,24,35,47,59,62,73,88,99);
$pos = binsearch($arr,62);
print($pos);
echo "<br>";
echo $i;