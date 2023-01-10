<html>
<head>
    <title>Array</title>
</head>
<body>
    <?php
    //answer P2E1
        $schools = array('CS','EC','TN');
        for($i=0;$i<3;$i++){//start;stop;step
            echo "<h2>For Loop School :" . $schools[$i]
                ."</h2>";
        }
        $j = 0; //start
        while ($j<3){ //stop
            echo "<h2>While loop School :" . $schools[$j]."</h2>";
            $j++; //step
        }
        $j = 0; //start
        do{ //stop
            echo "<h2>Do While loop School :" . $schools[$j]."</h2>";
            $j++; //step
        }while ($j<3);
        foreach ($schools as $key=>$school){
            echo "<h2>For each loop School : index[".$key
                ."] =" . $school."</h2>";
        }
    //answer P2E3
        $dict = array(
                "apple"=>"ផ្លែប៉ោម",
                "book"=> "សៀវភៅ",
                "car"=> "ឡាន",
                "dog"=> "ឆ្កែ",
        );

        echo "Array with -> : " .$dict['apple'] ."<br>";


        foreach ($dict as $key => $value){
            echo "dict of ".$key ." = " .$value ."<br>";
        }
        //answer P2E4
        $jsonString = '
            {
            "name": "Mr. SOK SAN",
            "id": "IDTB2022001",
            "gender": "Male",
            "address": 
                {
                "pob": "Prey Veng",
                "current": "Phnom Penh"
                }
            }';
        $myJsonDataStu = json_decode($jsonString);
        echo "Student Name:" . $myJsonDataStu->name . "<br>";
        echo "Student ID:" . $myJsonDataStu->id . "<br>";
        echo "Student Gender:" . $myJsonDataStu->gender . "<br>";
        echo "Student Place Of Birth:" . $myJsonDataStu->address->pob . "<br>";
        echo "Student Current Address:" . $myJsonDataStu->address->current . "<br>";

        //Answer P2E5
        $info = array(
            "name"=> "Mr. SOK SAN",
            "id"=> "IDTB2022001",
            "gender"=> "Male",
            "address"=>
                array(
                "pob"=> "Prey Veng",
                "current"=> "Phnom Penh"
                ),
            );
        echo "P2E5 Student place of birth : " . $info['address']['pob'];
        ?>

    <?php
    //function functionName(have/don't have parameters){ return/no return}
      function fact($n){
          $fac = 1;
          for ($i=1;$i<=$n;$i++){
              $fac = $fac * $i;
          }
          return $fac;
      }
      $n = 5;
      echo "Value of factorial of " .$n . "is " .fact($n);
    ?>
</body>
</html>