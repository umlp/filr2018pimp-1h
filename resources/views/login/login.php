<?php
  session_start();

  $_SESSION["utilisateur"] = "Admin";

  header("Location: ../resources/views/tasks.blade.php");
 ?>
