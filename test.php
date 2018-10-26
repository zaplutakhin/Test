<?php 

$test=file_get_contents($_GET["test"]);
$test=json_decode($test,true);
$i=1;
foreach ($test as $answers){
$question=$answers['question'];
$var1 =$answers['variant1'];
$var2 =$answers['variant2'];
$var3 =$answers['variant3'];
$answer = $answers['answer'];
$rightanswers[$i]=$answer;

?>
     <form action="" method="POST">
       <fieldset>
         <legend> <?php echo $question; ?> </legend>
           <label><input required type="radio" name="<?php echo $i;?>" value="<?php echo $var1; ?>"> <?php echo $var1; ?> </label>
           <label><input required type="radio" name="<?php echo $i;?>" value="<?php echo $var2; ?>"> <?php echo $var2; ?> </label>
           <label><input required type="radio" name="<?php echo $i;?>" value="<?php echo $var3; ?>"> <?php echo $var3; ?> </label>   
      </fieldset>
  
<?php
$i++;
}
?>
<input type="submit" value="Отправить"><br><br>

<?php
$i=1;

if (!empty($_POST)){
   foreach ($rightanswers as $right){
   if ($_POST[$i]==$right) echo "Ответ на вопрос $i ($_POST[$i]) верный <br>"; else echo "Ответ на вопрос $i ($_POST[$i]) неверный <br>";
    $i++;
} 
}
?>