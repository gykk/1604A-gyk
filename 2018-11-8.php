function sixOne($n,$m)
{
    echo "<pre>";
    $a = 1;
    $arr = range(0,$n-1);
    while(true){
        if(count($arr)==1){
            return array_keys($arr)[0];
        }
        foreach($arr as $key=>$val){
            $a++;
            if($a==$m-1){
                unset($arr[$key]);
                $a=0;
            }
        }
    }
}
