<!--Exercice 3 Variable-->
<?php 
    $title = 'Exercice 3';
    include 'header.php';
    
?>

<h1>Exercice 3</h1>

 <p>Bonjour <?php echo $_GET['startDate'] . ' ' . $_GET['endDate']; ?> !</p>
   

<?php 
    include 'footer.php';
?>