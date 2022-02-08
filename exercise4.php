<?php
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
$section=count($courses);
for($i=0;$i<$section;$i++){
    echo "<tr><td><li>$courses[$i]</li></td></tr>";
}


?>