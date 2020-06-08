<!--Exercice 1 Variable-->
<?php 
    $title = 'Exercice 1';

    include 'header.php';
?>


<p>Bonjour <?php echo $_GET['lastname'] . ' ' . $_GET['firstname']; ?> !</p>

<?php 
    include 'footer.php';
?>