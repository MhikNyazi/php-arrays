<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<h2>Sorting Array in Ascending Order With Alphabets</h2>
        <?php
        $array = ['cat','apple','dog','bubble','content','name','title','array','echo','viewport'];
        $size =count($array);
        echo "<pre>";
        print_r($array)."<br />";

        for($i=0; $i<$size; $i++){
                
                for($j=$i+1; $j<$size; $j++)
                {
                    
                    if($array[$i] > $array[$j])
                    {
                        $temp     = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
        }
        echo "<br />";
        echo "Sorted Array:" . "<br/>";
        print_r($array);
        ?>
</body>
</html>