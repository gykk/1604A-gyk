<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/5 0005
 * Time: 8:53
 */
 class opp{

     function one(){
         $sum=0;
         for ($i=1;$i<=100;$i++){
             $sum+=$i;
         }
         echo $sum;
     }
     function two(){
         $sum=$i=0;
         while ($i<=100){
             $sum+=($i++);
         }
         echo $sum;
     }
     function three(){
         $n=100;
         echo  (1+$n)*($n/2);


     }
     function demo($a)
     {
         if($a > 1)
         {
             $r=$a*demo($a-1);
         }else
         {
             $r=$a;
         }

         return $r;
         $a=6;
         echo $a."的阶乘的值".demo($a);
     }


}
    $opp=new opp();
 $opp->demo();