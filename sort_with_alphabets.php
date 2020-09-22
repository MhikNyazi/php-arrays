<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<h2>Sorting Array  With Country And City</h2>

    <?php
       
     
       $array = array(
            array(
               "country"=>"Pakistan",
               "city"=>"Lahore" ),
            array(
                "country"=>"England",
                "city"=>"London" ),
            array(
                "country"=>"India",
                "city"=>"Dheli" ),
            array(
                "country"=>"Pakistan",
                "city"=>"Islamabad" ),
            array(
                "country"=>"England",
                "city"=>"Bristol" ),
            array(
                "country"=>"India",
                "city"=>"Tamil" ),
            array(
                "country"=>"Canada",
                "city"=>"Toronto" ),
            array(
                "country"=>"Pakistan",
                 "city"=>"Karachi" ),
            array(
                "country"=>"Canada",
                "city"=>"Victoria" ),
            );
    
            echo "<pre>";
            echo "array before sorting: <br/>";
            print_r($array);

            
            //for sorting country in ascending order
            for( $i=0;  $i < count($array); $i++)
            {
              for($j=$i+1; $j < count($array); $j++)
                {
                  if ( $array[$i]["country"] > $array[$j]["country"])
                        {
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j]=$temp;
                            }
                        }
            }
             /*foreach ($array as $a){ 
                 echo $a['country']." ".$a['city']."<br>";
              }*/
            //sorting by city when a country is same
            for( $i=0;  $i < count($array); $i++)
            {
              for($j=$i+1; $j < count($array); $j++)
                {
                    if ( $array[$i]["country"] === $array[$j]["country"])
                    {
                        if ( $array[$i]["city"] > $array[$j]["city"]){
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j]=$temp;
                        }}
                }
            }



            echo "array after sorting: <br/>";
            print_r($array);

    ?>

</body>
</html>