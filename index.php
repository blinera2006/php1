<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
   <?php
  /*                                                                                     //   //write html\\ \\
    echo "<h1>project</h1>";
    echo "<hr>";
    echo "<p>this is my new project</p>";
    


                                                             //   //variables\\ \\
           $characterName = "John";

           $characterAge = 60;
        echo "there once was  man named $characterName <br>";
        echo "he was $characterAge years old <br>";
        $characterName = "Mike";
        echo "he really liked the name $characterName <br>";
        echo "but didn't liket being $characterAge <br>";
        



                                                             //  //data types\\ \\

              $pharse = "to be or not to be";
              $age = 30;
              $gpa = 30.3;
              $isMale = false;
              echo $pharse;
              
             
                                                         // //working with strings\\ \\

         $pharse = "flutura ACADEMY";
        echo  strtolower($pharse);   
        echo  strtoupper($pharse);
        echo  strlen($pharse);
        echo $pharse[0];
        echo $pharse[1];
        echo $pharse[2];
        echo $pharse[3];
        echo $pharse[4];
        echo $pharse[5];
        echo $pharse[6];
        $pharse[0] = "B";
        echo str_replace("Flutura","new", $pharse);
        echo substr($pharse,8,3);
       


   
                                                     // //working with numbers\\ \\
 
      echo 7+1;
      echo (4+5) * 10;

      $num = 10;
      $num++;
      $num =$num + 10;
      echo $num;


      echo pow(2,4);

      echo max(1,3);
      echo min(2,4);

      echo round(3,2);



            

                                                        // //getting user input\\ \\
    ?>
 
     <form  
         action="index.php" method="get">
         name <input type="text" name="username"> 
          <input type="submit">
          age <input type="number"name="age">
    </form>
            <br>
               your name is <?php echo $_GET["username"]?>
             <br>
               your age is <?php echo $_GET["age"]
       
   

                                                              //building a basic calculator\\
    ?>

    <form action="index.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">

</form>
 answer: <?php echo  $_GET["num1"]+ $_GET["num2"]
  
 



                                                      ////building a mad libs game\\\\
?>


            <form action="index.php" method="get">
                color: <input type="text" name="color"> <br>
                pluralNoun: <input type="text" name="pluralNoun"> <br>
                celebrity: <input type="text" name="celebrity"> 
                
                <input type="submit">
            </form>
            <br><br>

    <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];
     echo "roses are $color <br>";
    echo "$pluralNoun are blue ";
    echo "i love $celebrity";
  
                                                             //// URL parameteers\\\\

    ?>



      <form action="index.php" method="get">
        name:<input type="text "name="name"> <br>
        <input type = "submit">
</form>
<br><br>

<?php

                                                          //// post vs get\\\\
?>


   

<form action="index.php" method="POST">
        password: <input type="password" name="password"> <br>
        <input type = "submit">

<?php
echo $_POST["password"];




                                         ////ARRAY\\\\
        ?>



     <?php

     $friends=array("kevin","karen","lights","moon",);
     $friends[1] = "angela";
     echo $friends[0];//printon emrin e pare
     
    
                              /////using checkboxes\\\\



     ?>

                <form action="index.php" method="post">

           apples:     <input type="checkbox" name="fruits[]" value="apples"> <br>
           oranges:     <input type="checkbox" name="fruits[]" value="oranges"> <br>
           pears:     <input type="checkbox" name="fruits[]" value="pears"> <br>
                        <input type="submit">
                </form>                    

 


                          ///Associative Arrays\\\\

                  <form action="index.php" method="post">
                  <input type="text" name="student">
                  <input type="submit">
                  </form>
                <?php
            $grades = array("jim"=>"a+","pam"=>"b-","oscar"=> "c+")
            echo $grades[$_POST["student"]];
       //    $grades["jim"]= "f";
          //  echo count ($grades);

                                                   ////functions\\\\
                ?>

                                      


<?php

function sayHi($name,$age){
  echo "hello $name , your are $age <br>";
}

sayHi("mike");
sayHi("dave");
sayHi("oscar");



                                                 ////return statements\\\\\

?>



<?php
   function cube($num){
  return    $num * $num *$num;
  echo"hello";
   }
   $cubeResult = cube(4);
   echo $cubeResult;

                                       ////IF\\\\\
?>

I wake un 
 if im hungry 
 i eat breakfeast


 i look at my phone 
 if its about to die 
  i charge it 


  i leave my house
   if its cloudy 
  i bring an umbrella 
  otherwise
  i bring sunglasses



  <?php
  $isMale = false;
   $isTall =true;
  if ($isMale || $isTall){
    echo "you are a tall male";

  }  else if($isMale && !$isTall){
         echo"you are a short male "

  } 
  elseif(!$isMale && $isTall){
    echo"you are not male but tall";
  }

  else {
    echo "you are not male";
  }


                                                               ///// if statements(con't)\\\\\\\\\\\

  ?>

                                     
              <?php


             echo max(3,6);

             function GetMax($num1, $num2,$num3){
              if($num1 != $num2 && $num3 >= $num3){
                      return $num1;

              } elseif($num2 >= $num1 && $num2 >= $num3)
              {
                return $num2;

              }else {
                return $num3
              }
              if($num1 > $num2){
                return $num1;

              } else{
                return $num2;
              }
             }
             echo getMax(300,90);
              
                                                //////building a better calculator\\\\\\\\\\\\\
              ?>
                                       
               <form action="index.php" method="post"> 
               first num: <input type="number" step="0.1" name="num1"><br>
                OP: <input type="textbox" name="op"><br>
                Second num:<input type="number" name="num2"><br>
                <input type="submit">
            </form>

            <?php

            $num1= $_POST["num1"];
            $num2= $_POST["num2"];
            $op = $_POST['op']

            if($op == "+"){
              echo $num1+ $num2;

            }elseif($op == '-'){

              echo $num1 -$num2
            }elseif($op == "/"){
              echo $num1 /$num2
            }elseof($op == "*"){
              echo $num1 * $num2
            }else{
              echo "invalid operator";
            }
            
                                        ///// ///switch//////////////
            ?>

                    <form action="index.php" method="post"> 
                      what was your grade?
                      <input type="text" name="grade">
                      <input type="submit">
          </form>

          <?php

          $grade = $_POST["grade"];
          
          switch($grade){
             case "A":
              echo "you did amazing!";
              break;
              case "b":
                echo "you did pretty good"
                break;
                case "c":
                  echo "you did very bad"
                  break;
                  case "d":
                    echo "you fail"
                    break;
                 default:
                 echo "invAalid grade";
          }

          ///////////////while loop\\\\\\\\\\\\\\\\\\\
          ?>

                   <?php
                     $index = 1;
                    while($index <= 5){
                           echo "$index <br>";
                           $index++;
                    }

                    $index = 6;
                    do{
                      echo "$index<br>";
                      $index++;

                    }while($index <= 5);
                    
                            ///////for loops\\\\\\\\\\\
       
 ?>
                   <?php
                    $index = 6;
                    while($index <=5){
                      echo "$index<br>";
                      $index++;
                  }

                  for($i= 1; <= 5; ){
                            
                  }
            
                    /////////////////////////classes&objects\\\\\\\\\\\\\\\\\\\\\\\\\\\
           ?>

           <?php

           class book{
            var $title;
            var $author;
            var $pages;
           }


           $book1 = new book;
           $book1 ->title  ="harry potter";
           $book1 ->author  ="JK rowling";
           $book1 ->pages  =400;
           $string1 ="1jkfg";
           $string2="jbfjkbd";
           
           echo $book1 ->title;



                                       //////constructors\\\\\\\\\\\








           ?>


<?php

class book{
 var $title;
 var $author;
 var $pages;



function __construct($aTitle,$aAuthor,$aPages){
 $this ->title = $aTitle;
  $this ->title = $aAuthor;
 $this ->title = $aPages;
}
}

//$book1 = new book;
//$book1 ->title  ="harry potter";
//$book1 ->author  ="JK rowling";
//$book1 ->pages  =400;
//$string1 ="1jkfg";
//$string2="jbfjkbd";

$book1 = new book("harry potter","jk rowling",400)
$book1 = new book("harry potter","jk rowling",400)
$book1 = new book("harry potter","jk rowling",400)

echo $book1 ->title;

                           //////object functiona\\\\\\\

?>

<?php
class stundent{
  var $name;
  var $major;
  var $gpa;




  function __construct($name,$major,$gpa){
    $this -> name=$name;
    $this -> major=$major;
    $this -> gpa=$gpa;
    
  }


 function hasHonors(){
   if($this ->gpa >= 3.5 ){
      return true;
     }
    return false;
 }
}
$student1 = new student("jim","bussines",2.8);
$studenti2=new student("pam","art",3.4);

echo $student1 -> hasHonors();



                                           //////////getters|setters\\\\\\\\\\\
?>

<?php
class movie{
  public $title;
  public $rating;

  function __construct($title,$rating){
    $this -> title = $title;
    $this ->setRating ($rating) = $rating;
  }


  function getRating(){
    return $this ->rating;
  }
  function setRating($rating){
    $this ->reating;
  }
  function setRating($rating){
  //  $this->rating=$rating;

  if($rating == "g"||$rating == "pg"||$rating == "pg"||$rating == "pg")
  $this ->rating =$rating;
  }else{
    $this -> rating = "nr"
  }
}

$avenders = new movie("avengers","pg-13");
$avenders -> rating = "dog";
echo $avenders->getRating;


                        ///////inheritance\\\\\



?>



<?php
  class Chef{
      
       function makeChicken(){
        echo "the chef makes chicken <br>"
       }
      function makeSalad(){
        echo "the chef makes salad <br>";
       }
       function makeSpecialDish(){
          echo "the chef makes bbq ribes <br>";
       }

       class ItalianChef extends Chef {
          function makePasta(){
            echo "the chefr makes pasta"
          }
       }
     }

      $chef = new chef();
      $chef -> makeChicken();

$ItalianChef = new ItalianChef();
      $ItalianChef -> makePasta();
      gjhgj
*/ 
?>


                    

</body>
</html>