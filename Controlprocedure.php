<?php
function checkNumbers($min, $max) {
    echo "<table border= '1'> ";
    echo "<tr><th>Number</th><th>Status</th></tr>";
    for ($i = $min; $i <= $max; $i++) {
        echo "<tr><td>$i</td><td>";
        if ($i % 2 == 0) {
            echo "EVEN";
        } else {
            echo "ODD";
        }
        echo "</td></tr>";
    }
    echo "</table> <br>";
}
checkNumbers(1,5);
checkNumbers(2,12);
checkNumbers(3,7);
?>