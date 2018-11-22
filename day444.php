<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/22 0022
 * Time: 8:21
 */
function go($x, $y) {

    if ($x == 0 && $y == 0){
        return 0;
} elseif ($x==0 || $y==0) {
        return 1;
}

return  go($x, $y - 1) + go($x - 1, $y);

}
echo go(3,4);
