<form action=admin.php method=post enctype=multipart/form-data>
<div>
<input type="file" name="test">
</div>
<input type="submit" name="test">
</form>

<?php
  if (!empty($_FILES) && array_key_exists('test', $_FILES)) {
  //$hash=md5( $_FILES['json']['name'].time());
  $filename=date("G:i:s");
  move_uploaded_file($_FILES['test']['tmp_name'], "./tests/$filename.json");
 }
?>
