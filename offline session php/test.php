<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name;
    if ($_REQUEST['fname']) {
        $name = $_REQUEST['fname'];
    }
    echo $name;

}
?>