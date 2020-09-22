<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<h2>Sorting Array in Descending Order With Alphabets</h2>
        <?php
        $array = ['cat','apple','dog','bubble','content','name','title','array','echo','viewport'];
        $size =count($array);
        echo "<pre>";
        print_r($array)."<br />";

        for($j = 0; $j < count($array); $j ++)
            {
                for($i = 0; $i < count($array)-1; $i++)
                {

                    if($array[$i] < $array[$i+1])
                    {
                        $temp = $array[$i+1];
                        $array[$i+1]=$array[$i];
                        $array[$i]=$temp;
                    }       
                }
            }
        echo "<br />";
        echo "Sorted Array:" . "<br/>";
        print_r($array);
        ?>
</body>
</html>