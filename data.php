<?php require 'config.php'; ?>

#,Name,Gender,Age,Phone,City
<?php
$i = 1;
$rows = mysqli_query($conn, "SELECT * FROM student");
foreach($rows as $row) :
?>
<?php echo $i++; ?>,<?php echo $row["name"]; ?>,<?php echo $row["gender"]; ?>,<?php echo $row["age"]; ?>,<?php echo $row["phone"]; ?>,<?php echo $row["city"]; ?>
<?php echo "\n"; ?>
<?php endforeach; ?>