<li class="nav-item">
  <!-- Logged in user information -->
  <?php if (isset($_SESSION['username'])) : ?>
    <a class="nav-link" href="../Examen2018/registration/login.php" style="text-decoration:none">login</a>
  <?php else: ?>
    <a class="nav-link" href="registration/logout.php" style="color: red;">Logout</a>
  <?php endif; ?>
</li>
