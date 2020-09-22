<?php //error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
  <h2>Sorting Array in Ascending Order With Respect to Id</h2>
     
     <?php
       
     
       $records = array(
           array(
               "id"=>10, 
               "name"=>"ali", ),
           array(
            "id"=>2, 
            "name"=>"asad",
           ),
           array(
            "id"=>101, 
            "name"=>"naik",
          ),
           array(
           "id"=>104, 
           "name"=>"ali khan", 
        ),
          array(
          "id"=>202, 
          "name"=>"qasim", 
        ),
          array(
           "id"=>401, 
           "name"=>"aqil", 
        ),
          array(
           "id"=>701, 
           "name"=>"lina", 
        ),
          array(
           "id"=>2001, 
           "name"=>"alina", 
        ),
          array(
           "id"=>404, 
           "name"=>"sajid", 
        ),
          array(
           "id"=>900, 
           "name"=>"rizwan", 
        ),
          array(
           "id"=>78, 
           "name"=>"waleed", 
        ),
          array(
           "id"=>675, 
           "name"=>"aslam",
        ),
    );
    
    echo "<pre>";
    echo "array before sorting: <br/>";
    print_r($records);

     for($j = 0; $j < count($records); $j ++)
       {

        for($i = 0; $i < count($records)-1; $i++)
        {
                //( $records[$i]["id"]);
                //print_r( $records[$j]["id"]);
            if ( $records[$i]["id"] < $records[$i+1]["id"])
            {
            $temp = $records[$i+1];
            $records[$i+1] = $records[$i];
            $records[$i]=$temp;
                }
            }}
            print_r($records);
                
                
?>


</body>
</html>