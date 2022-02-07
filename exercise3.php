

<?php

#1
echo "<h3>1. Write a script that gets the current month</h3> <br><br>";
$f = date("F");
if ($f == "August"){
    echo "It's August, so it's still holiday.";
   
}
else{
    echo "Not August, This is Month-name so i don't have any holidays <br><br> " ;



}

 

#2
echo "<h3>2. Assign color red to a variable name color and check to print one the following responses using if else statement</h3><br> <br>";


$color = "red";

if ($color == "red"){
    echo "The color is red.<br><br>" ;

}
else{
    echo "The color is not red.<br><br>";

}

#3 
echo "<h3>3. Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50
</h3><br><br>";

$studenttotal= 400;

$ava = $studenttotal/5;


if( $ava  >80 )
{
    echo "The student grade is: Excellent<br><br>";



}

else if( $ava  >70 && $ava <=80 )
{
    echo "The student grade is: Great<br><br>";

}

else if( $ava  >= 60  && $ava <= 70 )
{
    echo "The student grade is: Good<br><br>";



}
else if( $ava  >= 50  && $ava <= 60 )
{
    echo "The student grade is: Pass<br><br>";



}
else 
{
    echo "The student grade is: Fail<br><br>";




}


?>



<html>
<head>

    <title>Document</title>
</head>
<body>

<h3>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.</h3>

<br><br>


<form method="post" action="exercise3-4-php.php">
        enter your name:<br>
        <input type="text" name="name"><br>
        enter your age<br>
                <input type="text" name="age">

        <input type="submit" value="submit">
</form>


    
</body>
</html>


    
<?php

echo "<h3>5. Use a looping statement to construct the following pattern: 
</h3><br><br>";
$i=1;


for($i=9;$i>1;$i--){
    for($j=1;$j<$i;$j++)
    echo "$j";
    echo "<br>";
    


}

?>
<br><br>

    
<?php
echo "<h3>6. Use While loop to print the following pattern: 
</h3><br><br>";

$i=1;
for($i=1;$i<=8;$i++){
    for($j=0;$j<$i;$j++)
    echo "*";
    echo "<br>";

}

?>