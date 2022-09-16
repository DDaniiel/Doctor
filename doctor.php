<?php
if (rand(410 , 360)/10 > 37.7) {
    echo "<span style = \" color: red;\">Ill!</span>";
} 
elseif (rand(410 , 360)/10 == 37.7) {
    echo "<span style = \" color: orange;\">Not good</span>";
} 
elseif (rand(410 , 360)/10 < 37.7) {
    echo "<span style = \" color: green;\">Great</span>";
}
?> 
