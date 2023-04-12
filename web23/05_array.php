<?php
echo '<h2>Indexed Array</h2>';
echo '<pre>';
$x = [123, 'Ali', 88.3, false, 90.3, 'XYZ', NULL];
// sort($x);
// rsort($x);
// echo current($x) . '<br>';
// echo next($x) . '<br>';
echo key($x) . '<br>';
echo end($x) . '<br>';
echo prev($x) . '<br>';
print_r($x);
// var_dump($x);
// ADD - check index
// $x[] = 'Top student';
array_push($x, 'AAAA');
// $x[7] = 'Top student';
// $delVal = array_pop($x);
// print_r($x);
// echo '<br>' . $delVal;
echo $x[2];
foreach($x as $a){
    // echo $a . '<br>';
}
echo '<h2>---------------</h2>';
echo '<h2>Key => Value Array</h2>';
$y = [
    'id' => 123,
    'name' => 'Ali',
    'savg' => 88.3,
    'isGraduated' => false,
    'gpa' => 90.3,
    'abc' => NULL
];
// access
echo $y['gpa'];
// add - check key
// $y['id'] = 145; -- update
// $y['ssn'] = 145;
// array_pop($y);
// var_dump(array_pop($y));
print_r($y);
// foreach($y as $k => $v){
//     echo $k . '  ' . $v .'<br>';
// }
// ksort($y);
// asort($y);
// arsort($y);
// krsort($y);

print_r($y);
// echo key($y) . '<br>';
echo current($y) . '<br>';