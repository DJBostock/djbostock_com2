<?php

include './questionBank.php';

$number = random_int(0, 2);
$question = $questionBank[$number];

echo json_encode($question);
