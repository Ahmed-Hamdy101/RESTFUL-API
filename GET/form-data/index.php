
<?php
header('Content-Type:application/json');

error_reporting(E_ALL);
ini_set('display_errors', 1);
$storage = array();
array_push($storage,array($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['password']));
echo json_encode($storage);
?>

<?php if (isset($_POST)) {
    exit();?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php header('Content-Type:application/json');?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="_/style.css">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <fieldset style="padding:20px;margin:25px;border-radius:15px;display:flex;justify-content:center;background:#ffffff;" >
            <input type="text" name="firstname" id="">
            <input type="text" name="lastname" id="">
            <input type="email" name="email" id="">
            <input type="text" name="password" id="">
            <input type="submit" value="ADD" name="submit" style="border-radius:20px;border:solid 1px #f29700;background:#f29700;color:white;width:10%;box-sh">
     </fieldset>
        </form>

</body>
</html>
<?php }?>