
    <?php
        //answer P2E1
        $schools = array('CS','EC','TN');
        for($i=0;$i<3;$i++){//start;stop;step
            echo "<h2>For Loop School :" . $schools[$i]
                ."</h2>";
        }
        $j = 0; //start
        while ($j<3){ //stop
            echo "<h2>While Loop School :" . $schools[$j]
                ."</h2>";
            $j++; //step
        }
        $j = 0; //start
        do{ //stop
            echo "<h2>Do While Loop School :" . $schools[$j]
                ."</h2>";
            $j++; //step
        }while ($j<3);
        foreach ($schools as $key=>$value){
            echo "<h2>For each Loop School :" . $value
                ."</h2>";
        }

        $stuInfo = array(
            "name" => "Mr. SOK SAN",
            "gender" => "Male",
            "pob" => "Prey Veng",
        );
        foreach ($stuInfo as $key=>$value){
           echo "Student's " .$key ." :"
               . $value ."<br>";
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

    $arrInfo = array(
            "name"=> "Mr. SOK SAN",
            "id"=> "IDTB2022001",
            "gender"=> "Male",
            "address"=>
                array(
                "pob"=> "Prey Veng",
                "current" => "Phnom Penh"
                )
            ) ;

    echo "Array Student Current Address:"
        . $arrInfo['address']['current'] . "<br>";
    ?>




    <?php
        //function functionName(have/don't have parameter){
        // have/don't have return value;
        //      }
        function sum($a,$b){
            return $a + $b;
        }
        function sumEcho($a,$b){
            echo " Sum value : ". $a+$b;
        }

        function fact($n){
            $fac = 1;
            for ($i=1;$i<=$n;$i++){
                $fac = $fac * $i;
            }
            return $fac;
        }
        function fact2($n){
            return $n>0? fact2($n-1) * $n:1;
        }
        $n = 5;
        echo "Factorial of $n = " . fact2($n);
    ?>















