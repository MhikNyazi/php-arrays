<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array In Descending Order</title>
</head>
<body>
   <h2>Sorting Array in Descending Order</h2>
     <?php
            $array=array(9, 34, 55, 100, 2, 18, 34, 3, 10, 15);
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