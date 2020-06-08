<!--Exercice 2 Variable-->
<?php 
    $title = 'Exercice 2';
    include 'header.php';
    
?>

<h1>Exercice 2</h1>

    <?php
           if(isset($_GET['age'])){
               echo $_GET['age'];
            }else{
                echo 'Age n\'existe pas dans cette url.';
           }
       

    ?>

<?php 
    include 'footer.php';
?>