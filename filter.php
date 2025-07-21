<?php
function filter_passed_students(string $scoreString, string $nameString): array
{
    $scores = explode(',', $scoreString);
    $names = explode(',', $nameString);
    $passed = [];

    for ($i = 0; $i < count($scores); $i++) {
        if ((int)$scores[$i] >= 35) {
            $passed[] = trim($names[$i]);
        }
    }

    return count($passed) > 0 ? $passed : ['Никто не прошёл'];
}

$scores = trim(fgets(STDIN));   // пример: 30,40,50
$names  = trim(fgets(STDIN));   // пример: Анна,Олег,Мария

$passedStudents = filter_passed_students($scores, $names);
foreach ($passedStudents as $student) {
    echo $student . PHP_EOL;
}
