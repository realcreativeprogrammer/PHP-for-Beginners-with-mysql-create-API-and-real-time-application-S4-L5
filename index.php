<form method='post'>
    <input type='text' name='firstname' placeholder='inter your firstname'>
    <input type='text' name='secondname' placeholder='inter your secondname'>

    <input type='submit' value='add' name='submitform'>
</form>
<form method='get'>
    <input type='text' name='firstnameget' placeholder='inter your firstname'>
    <input type='text' name='secondnameget' placeholder='inter your secondname'>

    <input type='submit' value='add' name='submitformget'>
</form>
<?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        // var_dump($_REQUEST);
        echo $_REQUEST['firstname'];
    }
    if(isset($_GET['submitformget'])){
        var_dump($_REQUEST);
        // echo $_REQUEST['firstname'];
    }
?>