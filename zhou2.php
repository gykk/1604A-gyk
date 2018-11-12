<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/12 0012
 * Time: 8:56
 */
/**
 * 有[1,2,3,4]4个数字，能组成多少个互不相同且无重复数字的三位数
 */
$num=0;
for($i=1;$i<=4;$i++){
    for($j=1;$j<=4;$j++){
        for($k=1;$k<=4;$k++){
            if($i!=$j && $j!=$k&&$i !=$k){
                $num=$num+1;
            }
        }
    }
}
//echo $num;

//
//class Danli{
//    private static $_instance;
//    private function __construct()
//    {
//        echo "你好";
//    }
//    public function __clone()
//    {
//        // TODO: Implement __clone() method.
//        trigger_error('Clone is not allow',E_USER_ERROR);
//    }
//
//    public static function getInstance(){
//        if(!(self::$_instance instanceof self)){
//            self::$_instance=new self;
//        }
//        return self::$_instance;
//    }
//    public function test(){
//        echo "调用成功";
//    }
//
//}
//$danli = Danli::getInstance();
//$danli->test();

function xf_scandir($dir)
{
    $files = array();
    if( $handle=opendir($dir) ){                             //$handle=Resource id #3

        while( ($file = readdir($handle)) !== false ){       //echo $file;echo "<hr>"; //$file分别是 .  ..   a.php   b.php   c
            if( $file != ".." && $file != "." ){
                if( is_dir($dir . "/" . $file) ){   //文件夹c
                    $files[$file] = xf_scandir($dir . "/" . $file);
                }else{                              //文件a.php,b.php
                    $files[] = $file;                          //var_dump($file);echo "<hr>";//分别是 a.php  b.php
                }
            }
        }


        closedir($handle);
        return $files;
    }
}

$re=xf_scandir('D:\phpStudy\PHPTutorial\WWW\PhpStormProject\HelloPHP\1512B');
var_dump($re);