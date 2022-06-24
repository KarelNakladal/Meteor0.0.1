<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
this is layout
<br>
<?php  $this->content;
if(isset($_POST['changeDirectoryTo'])){
    $this->changePathTo($_POST['changeDirectoryTo']);
}
?>

</body>
</html>