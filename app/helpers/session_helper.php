<?php
require APPROOT . '../model/UserModel.php';
session_start();

function isLoggedIn() {
  if (isset($_SESSION['user'])) {
    return true;
  } else {
    return false;
  }
}

