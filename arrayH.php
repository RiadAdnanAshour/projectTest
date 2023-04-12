<?php
/*
array_map():
هي دالة تستخدم لتطبيق دالة معينة على كل عنصر
في المصفوفة واسترجاع مصفوفة جديدة تحتوي 
على القيم التي تم إرجاعها بواسطة الدالة المعينة.
الاستخدام:
*/
function increment($n) {
    return $n + 1;
}

$array = array(1, 2, 3, 4, 5);
$result = array_map("increment", $array);
print_r($result);
echo '<br>';


/*
array_filter():
هي دالة تستخدم لاسترجاع المصفوفة المعالجة 
بواسطة دالة معينة والتي تحتوي على 
العناصر التي تم تحديدها بواسطة الشرط الذي يحدده المستخدم.
الاستخدام:

*/
function is_even($n) {
    return $n % 2 == 0;
}

$array = array(1, 2, 3, 4, 5);
$result = array_filter($array, "is_even");
print_r($result);
echo '<br>';

/*
array_reduce():
هي دالة تستخدم لتطبيق دالة محددة على كل 
العناصر في المصفوفة وإرجاع قيمة واحدة كنتيجة. 
ويمكن استخدام هذه الدالة لجمع قيم المصفوفة أو لإيجاد 
الحد الأقصى أو الأدنى أو لإجراء أي عملية حسابية أخرى.
الاستخدام:*/
function sum($carry, $item) {
    $carry += $item;
    return $carry;
}

$array = array(1, 2, 3, 4, 5);
$result = array_reduce($array, "sum");
echo $result;
echo '<br>';
?>