<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>practice</title>
</head>
<body>
<style>
.container{
    padding:60px;
    margin: auto;
    background-color:pink;
    text-align:center;
}
.body{
    background-color:#EEEBAB;
    padding:60px;
    margin:auto;
    
}
.foot{
    background-color:#599DAB;
    padding:60px;
    margin:auto;
    text-align:center;
}

</style>

    <div class="container"> 
       <h1>
         This is my first php page
       </h1>
       <h1>
       Lets learn about PHP !
       </h1>
</div>
<div class ="body">
    <?php
    //types of comment 
    //1-sngle line
    /*
    2-multi line 
    comment
    */
 // variables in php 
    echo "<h2> * Declaring variables </h2>";   
    $variable1 =2;
    $variable2 = 3;
    echo ("<br> Variable1 = ");
    echo $variable1;
    echo ("<br> Variable2 = ");
    echo $variable2;
   // echo ("<br>");
    //echo $variable1+$variable2;
    //echo("<br>");
   // echo("heyy");
    echo("<br>");
// operator in php
echo "<h2>* Operators in php </h2>";
    //arithmetic operator 
            echo ("<br> variable1 + variable2 = ");
            echo $variable1 + $variable2;
            echo ("<br> variable1 - variable2 = ");
            echo $variable1 - $variable2;
            echo ("<br> variable1 * variable2 = ");
            echo $variable1 * $variable2;
            echo ("<br> variable1 / variable2 = ");
            echo $variable1 / $variable2;
            echo ("<br> variable1 % variable2 = ");
            echo $variable1 % $variable2;
            echo ("<br>");
            echo ("<br>");
    // assignment operator 
    echo "<h2>* Arithmetic operator </h2>";
            $newvar = $variable1;
            $newvar1 = $variable1;
            $newvar2 = $variable1;
            $newvar3 = $variable1;
            $newvar += 1;
            $newvar1 -= 2;
            $newvar2 *= 3;
            $newvar3 /= 2;
            echo ("<br> variable1 ++1  =");
            echo $newvar;
            echo ("<br> variable1 --2  =");
            echo $newvar1;
            echo ("<br> variable1  *3  =");
            echo $newvar2;
            echo ("<br> variable1 /2  =");
            echo $newvar3;

    // Comparison operator
            echo "<h2>* Comparission operator </h2>";
            echo ("variable1 == variable2 =");
            echo var_dump($variable1 == $variable2);
            echo ("<br>variable1 != variable2 =");
            echo var_dump($variable1 != $variable2);
            echo ("<br>variable1 <= variable2 =");
            echo var_dump($variable1 <= $variable2);
            echo ("<br>variable1 >= variable2 =");
            echo var_dump($variable1 >= $variable2);
    // Increment/Decrement operator
            echo "<h2>* Increment/Decrement operator </h2>"; 
            echo ("variable++  ="); 
            echo $variable1++;
            echo ("<br>"); 
            echo $variable1; 
            echo ("<br>");
            echo ("variable --  =");
            echo $variable1--;
            echo ("<br>");
            echo ("++ variable  ="); 
            echo ++$variable1;
            echo ("<br>");
            echo ("--variable  =");
            echo --$variable1;
            echo ("<br>");
            echo ("<br>"); 
    // Logical operator
        echo "<h2>* Logical operator </h2>";
            //And(&&) 
                $myvar = (true and true);
                echo $myvar;
                echo ("<br>"); 
                echo var_dump($myvar);
                $myvar1 = (true and false);
                echo $myvar1;
                echo ("<br>"); 
                echo var_dump($myvar1);
                $myvar2 = (false and false);
                echo $myvar2;
                echo ("<br>"); 
                echo var_dump($myvar2);
        // or(||)
                $myvarr = (true or true);
                echo $myvarr;
                echo ("<br>"); 
                echo var_dump($myvarr);
                $myvarr1 = (true or false);
                echo $myvarr1;
                echo ("<br>"); 
                echo var_dump($myvarr1);
                $myvarr2 = (false or false);
                echo $myvarr2;
                echo ("<br>"); 
                echo var_dump($myvarr2);
        //xor
            $myvarrr = (true xor true);
            echo $myvarrr;
            echo ("<br>"); 
            echo var_dump($myvarrr);
            $myvarrr1 = (true xor false);
            echo $myvarrr1;
            echo ("<br>"); 
            echo var_dump($myvarrr1);
            $myvarrr2 = (false xor false);
            echo $myvarrr2;
            echo ("<br>"); 
            echo var_dump($myvarrr2);
        // !
    ?>
    <?php
    // DATA TYPES
                echo "<h2>* Data Types </h2>";
                //1 - string
                echo "<h3> string </h3>";
                echo ("<br>");
                $str = "this is a string";
                echo $str;
                echo ("<br>");
                echo var_dump($str);
                //2 - Array
                //3 - Float
                echo "<h3> float </h3>";
                echo ("<br>");
                $str1 = 27.0;
                echo ("<br>");
                echo $str1;
                echo ("<br>");
                echo var_dump($str1);
                //4 - Boolean
                echo "<h3> boolean </h3>";
                echo ("<br>");
                $str2 = true;
                echo $str2;
                echo ("<br>");
                echo var_dump($str2);
                //5 - Integer
                echo "<h3> integer </h3>";
                echo ("<br>");
                $str3 = 10;
                echo $str3;
                echo ("<br>");
                echo var_dump($str3);
                //6 - object
                // constant
                echo "<h3> Constant </h3>";
                echo ("<br>");
                define ('PI' ,3.17);
                echo PI;
    ?>
    <?php
    echo "<h2>* Conditional statements </h2>";
                $var6 = 34;
                if($var6>=18){
                    echo("You can go to party");
                }
                else if($var6==34){
                echo("Enjoy!");
                }
                else{
                    echo("You can not go to party");
                }
                echo "<h2> Arrays </h2>";
                $languages = array("C","C++","JAVA","Python","PHP","Ruby","Dart","Kotlin");
                echo ("<br>");
                echo $languages[0];
                echo ("<br>");
    echo count($languages);

    echo "<h2>* Loops </h2>";
    echo("<br>");
                //Iteration of array using while loop
                echo "<h3> While loop </h3>";
                $a =0;
                while ($a <= 10) {
                    echo ("<br>The value of a =");
                    echo $a;
                    $a++;
                }
                $a=0;
                while ($a < count($languages)) {
                    # code...
                    echo("<br>the value of languages = ");
                    echo $languages[$a];
                    $a++;
                }
                //Iteratiion if array using do while loop
                echo "<h3> do While loop </h3>";
                $a=0;
                do 
                {
                    # code...
                    echo("<br>the value of languages = ");
                    echo $languages[$a];
                    $a++;
                } while ($a < count($languages));
                // for loop
                echo "<h3> for loop </h3>";
                $a =5;
                for ($a=0; $a < 4; $a++) { 
                    # code...
                    echo ("<br>The value of a =");
                    echo $a;
                }
                // foreach loop
                echo "<h3> foreach loop </h3>";
                foreach($languages as $value){
                    echo("<br>the value is = ");
                    echo $value;
                }
    //Functions 
    echo "<h2> * Functions </h2>";
    echo ("<br>"); 
                    function print5(){
                        echo("<br>five");
                    }
                    print5();
                    function number($num){
                        echo("<br>your number is = ");
                        echo $num;
                    }
                    number(45623155);
                    number(45633155);
                    number(456453155);

    ?>
    <?php
    // Strings
    echo "<h2> * Strings </h2>";
    echo ("<br>"); 
                    $str = " this is a string";
                    echo $str."<br>";
                       // print length of string
                       $lenn = strlen($str);
                       echo "The length of this string is =".$lenn ."<br> Thankyou";
                       // print word count of string 
                       echo "The word count of this string is =".str_word_count($str)."<br> Thankyou";
                       // print reverse of string 
                       echo "The reverse of this string is =".strrev($str) ."<br> Thankyou";
                       // print possition of string 
                       echo "The possition of is string is =".strpos($str,"is") ."<br> Thankyou"; 
    ?>
    </div>
            <div class ="foot">
            <?php
            echo "<h2> These all are some basics in php <br> THANKS FOR VIEW </h2>";
            ?>
            </div> 
</body>
</html>