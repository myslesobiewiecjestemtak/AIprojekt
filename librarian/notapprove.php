<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"UPDATE student_registration SET status='no' WHERE id=$id");
?>
<script type="text/javascript">
    alert("Zatwierdzony");
    window.location="home.php";
    exit;
</script>
