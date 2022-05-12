<?php

require __DIR__.'/../lib/functions.php';

$id = '1';

$data = fetchById($id);
$question = 'HTMLはなんの略称でしょうか？';

$answers = [
    'A' => 'HyperTextMakingLanguag',
    'B' => 'HyperTextMarkupLanguage',
    'C' => 'HonmaniTensaitekinaMajidesugoiLanguage',
    'D' => 'そもそも略称ではない',
    
];

$correctAnswer = 'B';
$correctAnswerValue = $answers[$correctAnswer];
$explantion = 'これが間違えてたら「HTMLとは？」の動画を復習お願いします！';

include __DIR__.'/../template/question.tpl.php';