<h2>Результаты:</h2><?php
$this->title = 'Результаты';
$this->params['breadcrumbs'][] = $this->title;

echo "<table class='table'>";
foreach ($names as $key => $value){
    $right = 0;
    $q++;
    echo "<tr>
<td>$q</td>
<td>$value[username]</td>
<td>Тест из лекции: $value[name]</td><td>";
    if($value['answer1'] == $value['right1']) $right++;
    if($value['answer2'] == $value['right2']) $right++;
    if($value['answer3'] == $value['right3']) $right++;

    $precent = round($right * 100 / 3,2).'%';

echo"Правильных $right из 3 ($precent)</td>
<td>$value[date_time]";

echo "</tr>";
}
echo "</table>";
