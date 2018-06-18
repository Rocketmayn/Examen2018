<header>
  <h1 class="logo">Examen 2018</h1>
  <input type="checkbox" id="nav-toggle" class="nav-toggle">
  <nav>
    <ul>
      <li><a class="menu-link active" href="index.php">Home</a></li>
      <li><a class="menu-link" href="pages/documentatie.php">Documentatie</a></li>
      <li><a class="menu-link" href="pages/bronnen.php">Bronnen</a></li>
      <li class="menu-link"><a href="#overlay" onclick="on()";>Login</a></li>

    </ul>
  </nav>
  <label for="nav-toggle" class="nav-toggle-label">
    <span></span>
  </label>
</header>

<!-- DE HREF LOOPT VIA INDEX DIRECTORY -->


<!-- Code Snippets

<li class="menu-link"><?php  if (isset($_SESSION['users'])) {
  echo '<a href="#overlay" style="text-decoration:none">login</a>';
}else{
  echo '<a href="login.php" style="text-decoration: none">Logout</a>';
} ?></li>

<li class="nav-item text-right"><a class="nav-link" href="../Examen2018/registration/login.php">Login</a></li>
<li class="nav-item text-right"><?php /* if (isset($_SESSION['id'])) {
  echo '<a class="nav-link link" href="login.php?action=logout" style="text-decoration:none">Logout</a>';
}else{
  echo '<a class="nav-link link" href="login.php" style="text-decoration: none">Logout</a>';
} ?></li>


<?php if(isset($_SESSION['username'])): ?>
  <a class="nav-link link" href="../Examen2018/registration/logout.php" style="text-decoration:none">logout</a>
<?php else: ?>
  <a class="nav-link link" href="../Examen2018/registration/login.php" style="text-decoration:none">login</a>
<?php endif; ?>


<?php if (isset($_SESSION['username'])) : ?>
  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
  <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
<?php endif*/ ?>

<h1 class="logo">Logo</h1>
<input type="checkbox" id="nav-toggle" class="nav-toggle">
<nav>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
<label for="nav-toggle" class="nav-toggle-label">
  <span></span>
</label>

<h1 class="text-left ml-5">Examen 2018</h1>
<nav class="menubar menubar-expand-lg">
  <ul class="nav justify-content-center">
    <li class="menu-item"><a class="menu-link active" href="index.php">Home</a></li>
    <li class="menu-item"><a class="menu-link" href="pages/documentatie.php">Documentatie</a></li>
    <li class="menu-item"><a class="menu-link" href="#">Contact</a></li>
    <li class="menu-item"><a class="menu-link" href="php/profile.php">Account</a></li>
  </ul>
</nav>
-->
