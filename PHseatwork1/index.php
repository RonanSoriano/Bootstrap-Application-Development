<!DOCTYPE html>
<html>
    <head>
	    <title>Basics of PHP</title>
   </head>
   <body>
	    <h1>PHP Basic Part 1</h1>
        <?php
        /*
            echo "Hello World!";
            //This is a single line comment
            #This is also a single line comment


                Multiple line comment
                Multiple line comment
                Multiple line comment
                Multiple line comment
                Multiple line comment
                Multiple line comment
                Multiple line comment


            echo "<br/>";

            $mytext = "Welcome to my page";
            $x = 10;
            $y = 5;

            echo $mytext;
            echo "<br/>";
            echo $x + $y;

            /*
                PHP Supports Data Types
                String
                Integer
                Float(double)
                Boolean



            $vstring = "hello";
            $vnumber = 100;
            $vfloat = 10.5;
            $vbool = true;

            var_dump($vstring);
            var_dump($vnumber);
            var_dump($vfloat);
            var_dump($vbool);



            #PHP STRING FUNCTIONS

            echo strlen("HELLO WORLD");
            echo "<br/>";

            echo str_word_count("Hello World! Today");
            echo "<br/>";

            echo strrev("New Era University");
            echo "<br/>";

            echo strpos("Hello world!", "world");
            echo "<br/>";

            echo str_replace("world","Dolly","Hello world");


        #PHP Operators
        #Arithmetic  + - * / % **
        #Assignment  x=y x+=y x-=y
        #Comparison  == === != <> !==  > < >== <=
        #Increment/Decrement  ++$x $x++
        #Logical  and or xor && || !
        #String  .  .=     $txt1.$txt2
        #Array
        #Condtional Assignment Operators  ?:  ??



        #PHP if else statements

        $x = 20;

        if($x < 20){
            echo "the value is lesthan to 20";
        } elseif($x == 20){
            echo "the value is equal to 20";
        } else{
            echo "The value is invalid";
        }



        #PHP switch statement
        $favcolor = "black";

        switch($favcolor){
            case "red";
            echo "You have a red t-shirt";
             break;

            case "blue";
            echo "You have a blue t-shirt";
             break;

            case "green";
            echo "You have a green t-shirt";
             break;

            default:
                echo "No Available Color";

        }
        */

        #PHP Seatwork

         $ave = 95;

         if ($ave >= 95 && $ave <= 100) {
            echo "Excellent";
         } elseif ($ave >= 85 && $ave <= 94) {
            echo "Very Good";
         } elseif($ave >= 80 && $ave <= 84){
            echo "Good!";
         } elseif($ave >= 75 && $ave <= 79){
            echo "Passed!";
         } else{
            echo "Go home plant kamote!";
         }

        ?>

   </body>
</html>