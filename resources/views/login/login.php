<?php
  session_start();

  $_SESSION["utilisateur"] = "Admin";

  return redirect()->route('/');
 ?>
