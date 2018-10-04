
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>Please input your name:<br></h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type='text' name='nombreuser' >
            <input type='submit' value='Submit'>
        </form>
        
    </body>
</html>

<?php
if(isset($_POST['nuser']) && !empty($_POST['nombreuser'])){
    $username = $_POST['nuser'];
    if($username == 'jp'){
        echo 'hello';
    }else{
        echo 'Incorrecto';
    }

}else{
    echo 'Introduce nombre';
}



