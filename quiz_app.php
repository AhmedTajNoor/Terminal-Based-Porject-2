<?php

function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}

$questions = [
    ['question' => 'What is 6 + 7?', 'correct' => '13'],
    ['question' => 'What is the national fruit of Bangladesh?', 'correct' => 'Jackfruit'],
    ['question' => 'Who painted the Mona Lisa?', 'correct' => 'Leonardo da Vinci'],
];

$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your answer: "));
}


$score = evaluateQuiz($questions, $answers);
echo "\nYou scored $score out of " . count($questions) . ".\n";

if ($score === count($questions)) {
    echo "Excellent job!\n";
} elseif ($score > 1) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!\n";
}
