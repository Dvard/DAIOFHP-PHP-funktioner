<?php
function area($val1 = 0, $val2 = 0) {
    if (is_numeric($val1) and is_numeric($val2) and $val1 != null and $val2 != null) {
        return round($val1 * $val2, 2);
    } else {
        return 'Error!';
    }
}

function medeltal($nums = '') {
    $nums = explode(',', $nums);
    $amount = 0;
    $tmp = 0;
    foreach ($nums as $num) {
        if (is_numeric($num)) {
            $tmp = $tmp + $num;
            $amount++;
        }
    }

    return $tmp / $amount;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Övning - 5</title>
</head>
<body>
<p><?php echo area(1, 5); // 5?></p>
<p><?php echo medeltal('1,5,8,2,4') // 4?></p>
</body>
</html>
