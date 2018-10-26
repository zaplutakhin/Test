<?php
$dir = 'tests';
$tests = scandir($dir);
$i=1;
foreach ($tests as $test){
    if ($test !=='..' and $test!=='.' and $test!=='test.php'){
      ?>
      <a href="tests/test.php?test=<?php echo $test ?>"> Тест <?php echo $i ?></a><br>
      <?php
    $i++;
    } 
}
?>