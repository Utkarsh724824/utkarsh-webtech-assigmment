<!-- Q2.Simulate a traffic light system using if-else statements.
Log the appropriate message for each colour of the traffic light
(e.g. "Green- Go," "Yellow - Slow down," "Red - Stop")
CODE:- -->
<?php
$color = "Red"; // Assuming the color of the traffic light
if ($color == "Green") {
    echo "Green Go";
} elseif ($color == "Yellow") {
    echo "Yellow Slow down";
}elseif ($color == "Red") {
    echo "Red Stop";
} else {
    echo "Invalid color";
}
?>