<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array In Ascending Order</title>
</head>
<body>
   <h2>Sorting Array in Ascending Order</h2>
        <?php
            $numbers = array(9, 34, 55, 100, 2, 18, 34, 3, 10, 15);
            $count = count($numbers);
            echo "<pre>";
            print_r($numbers);
            for ($i = 0; $i < $count; $i++) {
                for ($j = $i + 1; $j < $count; $j++) {
                    if ($numbers[$i] > $numbers[$j]) {
                        $temp = $numbers[$i];
                        $numbers[$i] = $numbers[$j];
                        $numbers[$j] = $temp;
                    }
                }
            }
            echo "Sorted Array:" . "<br/>";
            print_r($numbers);
        ?>
    
</body>
</html>