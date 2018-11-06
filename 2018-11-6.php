 function nu($n,$m) {
    $number = 0;
    for($i=$n;$i<=$m;$i++) {
        $a = substr_count((string)$i,"1");
        if($a!==false) {
            $number = $number+$a;
        }
        //echo $i."\n";
    }
    echo $number;
}
nu(1,13);