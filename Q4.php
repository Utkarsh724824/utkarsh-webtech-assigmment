<!-- 4. Grading System: -->
<?php
function determineGrade($score) {
    if ($score < 60) {
        return "F";
    } elseif ($score >= 60 && $score <= 70) {
        return "D";
    } elseif score > 70 && $score <= 80) {
        return "C";
    } elseif ($score > 80 && $score <= 90) {
        return "B";
    } else {
        return "A";
    }
}
// Example usage:
$score = 85;
$grade=determineGrade($score);
echo "Grade: " . $grade;
?>