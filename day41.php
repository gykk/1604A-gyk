<?php
header("content-type:text/html;charset=utf8");

//function NumberOf1($n)
//{
//    $count = 0;
//    $flag = 1;
//    while ($flag != 0) {
//        if (($n & $flag) != 0) {
//            $count++;
//        }
//        $flag = $flag << 1;
//    }
//    return $count;
//}
//function NumberOf1($n)
//{
//    $count = 0;
//    if($n < 0){ // 处理负数
//        $n = $n&0x7FFFFFFF;
//        ++$count;
//    }
//    while($n != 0){
//        $count++;
//        $n = $n & ($n-1);
//    }
//    return $count;
//}


function NumberOf1($n)
{
    $count = 0;
    for($i = 0;$i <32;$i++){ //3、php中整形32位
        if(($n >> $i) & 1){ //1、PHP中的位运算符和java和c++一样  2、位移运算符看箭头方向，箭头向左就是左移，左移*2
            $count++;
        }
    }
    echo $count;
}

echo $n;
$num=45;
echo $num."的二进制是".decbin($num)."<br/>";
echo $num."共有".NumberOf1($num)."个1";

//function NumberOf1($n)
//{
//    $count = 0;
//    if($n < 0){ // 处理负数
//        $n = $n&0x7FFFFFFF;
//        ++$count;
//    }
//    while($n != 0){
//        $count++;
//        $n = $n & ($n-1);
//    }
//    return $count;
//}

