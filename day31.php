<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/13 0013
 * Time: 8:34
 */

     class Sum0 {
         public function sum() {
             return 0;
         }
     }

     class Test {
         private $a = array();

         public function __construct() {
             $this->a[0] = new Sum0();
             $this->a[1] = $this;
         }

         public function sum($n) {
             #这 !!n 是关键，当 n != 0 时， !!n = true = 1,进入递归，当 n == 0时，!!n = false = 0,递归中止，返回0
             return $this->a[!!$n]->sum($n - 1) + $n;
         }
     }

     #第二种方法，网上抄的，屌爆了
     #直接用&&来终止递归
     function sumn($n) {
         $r = 0;
         $n && ($r = (sumn($n - 1) + $n));
         return $r;
     }

//     $t = new Test();
//     echo $t->sum(5) . "<br>";
     echo sumn(5);
 ?>