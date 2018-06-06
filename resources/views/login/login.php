<?php
  session_start();

  $_SESSION["utilisateur"] = "Admin";

  header("Location: ".view('/'));
 ?>
