<?php
    session_start();
    unset($_SESSION['user']);
    if(isset($_SESSION['tipo'])){
        unset($_SESSION['tipo']);
    }
    header('Location: form.php');
?>

<?php
        session_start();
        if(isset($_SESSION['user']) ==  False){
            header('Location: form.php');
        }
    ?>