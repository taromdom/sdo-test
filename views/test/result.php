<br>Ваш Результат:
<br>Ответы на вопрос:

<br><?=$lectArr['question1']?> <?php echo $lectArr['answer1_'.$res['answer1']]; ?>
<?php if($res['answer1'] == $lectArr['right1']){ echo ' Верный'; $right++;}else{ echo ' Неверный'; $wrong++;}?>

<br><?=$lectArr['question2']?> <?php echo $lectArr['answer2_'.$res['answer2']]; ?>
<?php if($res['answer2'] == $lectArr['right2']){ echo ' Верный'; $right++;}else{ echo ' Неверный'; $wrong++;}?>

<br><?=$lectArr['question3']?> <?php echo $lectArr['answer3_'.$res['answer3']]; ?>
<?php if($res['answer3'] == $lectArr['right3']){ echo ' Верный'; $right++;}else{ echo ' Неверный'; $wrong++;}?>
<?php

echo "<hr>Правильных: $right из 3<br>";

echo round($precent = $right * 100 / 3,2).'%';