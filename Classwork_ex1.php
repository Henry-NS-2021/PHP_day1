<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="name" content="Henry">
    <!-- my css stylesheet -->
    <link rel="stylesheet" href="style.css">
    <title>PHP Day-1 - Exercise 1</title>
</head>
<body>
    <?php
        //[EXERCISE 1]
        //If I uncomment this, the browser will stop displaying the results. Why?
        $name = "<div id=\"container\">
        <div><h1>Henry</h1></div>
        </div>";
        echo $name;

        //[EXERCISE 2]
        // SOLUTION 1
        $me = ["Joshua", 25, "postman"];

        echo "hi, my name is <b>$me[0]</b>, and i am <em>$me[1]</em>, and i work as a <b>$me[2]</b><br><br>";
     
        //SOLUTION 2
        // $my_name = "Joshua";
        // $my_age = 25;
        // $my_job_title = "postman";

        // echo "hi, my name is $my_name, and i am $my_age, and i work as a $my_job_title";
        
    ?>
</body>
</html>