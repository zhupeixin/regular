<?php
/**
 * Created by PhpStorm.
 * User: xiaozhu
 * Date: 2016/8/8
 * Time: 18:46
 * description:PHP正则表达式函数
 */
//preg_match(),preg_match_all()
$pattren = '/[0-9]/';
$subject = 'wee1e32ef45df1vzv5fa';
$m1 = $m2 =array();
preg_match($pattren,$subject,$m1);//匹配一次
preg_match_all($pattren,$subject,$m2);//循环匹配全部
show($m1);
echo '<hr/>';
show($m2);
function show($var = null){
    if(empty($var)){
        echo 'null';
    }elseif(is_array($var) || is_object($var)){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }else{
        echo $var;
    }
}
?>