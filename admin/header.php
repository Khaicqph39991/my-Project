<?php 
session_start();
if (!isset($_SESSION['user']) || $_SESSION['vai_tro'] != 1) {
  header("Location: ../index.php?act=");
  exit;
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Dự Án 1</title>
    <link rel="shortcut icon" href="assets/images/logoindex.png">
    <link rel="stylesheet" href="assets/main.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <link rel="stylesheet" href="assets/editor.css" />
  </head>
  <body style="overflow-x: hidden; overflow-y: scroll;">
  <header class="app-header">
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Ẩn thanh bên"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li>
          <a class="app-nav__item" href="index.php?act=dangxuat"><i class="bx bx-log-out bx-rotate-180"></i>
          </a>
        </li>
      </ul>
    </header>