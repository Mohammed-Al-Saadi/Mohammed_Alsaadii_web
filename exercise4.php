<?php



$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
$section=count($courses);
for($i=0;$i<$section;$i++){
    echo "<tr><td><li>$courses[$i]</li></td></tr>";
}
echo "<h2>2.Delete an element from the array below:
</h2>";

$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
  

unset($courses1[2]);
  

print_r($courses1);


echo "<h2> 3. Sort the following array 
.<br>Sort by key </h2>";

$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

sort($courses3);
$section2 = count($courses3);
for ($i=0; $i<$section2; $i++){
    echo "<tr><td><li>$courses3[$i]</li></td></tr>";
}
echo "<br>";
rsort($courses3);
$section2 = count($courses3);
for ($i=0; $i<$section2; $i++){
    echo "<tr><td><li>$courses3[$i]</li></td></tr>";
}
echo "<br> <h2>Sort by value</h2>";

$courses3=array("1"=>"PHP","2" =>"HTML","3"=> "JavaScript", "4"=>"CMS","5"=> "Project");
asort($courses3);
foreach($courses3 as $key =>$value ){
   echo "<tr><td><li>$key : $value</li></td></tr>";
    

}
echo"<br>";
$courses4=array("1"=>"PHP","2" =>"HTML","3"=> "JavaScript", "4"=>"CMS","5"=> "Project");

arsort($courses3);
foreach($courses3 as $key =>$value ){
   echo "<tr><td><li>$key : $value</li></td></tr>";
    

}
echo"<br>";

echo "<h2>4. Change the following array's all values to upper case.</h2>";





echo "<h2>5. Create an array that holds your favorite colors and print them. (indexed arrays)
</h2>";
$colors[0]= "yellow";
$colors[1]="red";
$colors[2]="blue";
$colors[3]="black";
$section4=count($colors);
for($i=0;$i<$section4;$i++){
    echo "<tr><td><li>$colors[$i]</li></td></tr>";

     
}
echo"<br>";

echo "<h2>6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
</h2>";
$colors1=array("#ff0000"=>"red","#0000FF"=> "blue","#000000"=> "black", "#FFFF00"=>"yellow");
foreach($colors1 as $key =>$value )
{
    echo "<tr><td><li>$key : $value</li></td></tr>";
}
{
    echo "<tr><td><li>$key : $value</li></td></tr>";

}
echo"<br>";
echo"<h2>7. Include 12 months in an array named month and print them using loop statement.</h2>";


$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
$section5=count($month);
for($i=0;$i < $section5 ;$i++)
{
    echo "<tr><td><li>$month[$i]</li></td></tr>";

}

?>