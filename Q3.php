<!-- 3. Fitness App: -->
<?php
function determineFitness Level($steps) {
    if ($steps < 5000) {
        return "Beginner";
    } elseif ($steps >= 5000 && $steps <= 10000) {
        return "Intermediate";
    } else {
        return "Advanced";
    }
}
// Example usage:
$steps = 7500;
$fitnesslevel = determineFitnessLevel($steps);
echo "Fitness Level: . $fitnessLevel;
?>