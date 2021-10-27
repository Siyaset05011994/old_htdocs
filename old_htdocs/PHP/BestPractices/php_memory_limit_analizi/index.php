<?php





// function test(){
//     $a = str_repeat("Hello", 10000000);
//     echo memoryUsageForMb()."\n";
// }


// for($i=0;$i<100;$i++){
//     test();
// }


//echo memoryUsageForMb() . "\n";
//
//$a = str_repeat("Hello", 1000000);
//
//echo memoryUsageForMb() . "\n";
//
//
//$b = str_repeat("Hello", 1000000);
////unset($a);
//
//echo memoryUsageForMb() . "\n";
//
//
//function memoryUsageForKb(){
//    return memory_get_usage()/1024;
//}
//
function memoryUsageForMb(){
    return memory_get_usage()/(1024*1024);
}