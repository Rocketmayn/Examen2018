<?php
$get_user_data = "";

 ?>

<ul class="user_data">
  <li><span><?php echo "Username:"; ?></span><?php echo $_SESSION['username']; ?></li>
</ul>

<table class="account_info">
  <thead>
    <tr>
      <th>Mijn account</th>
    </tr>
    <tr>
      <th>Username</th>
      <td><?php echo $_SESSION['username']; ?></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><?php echo $_SESSION['username']; ?></td>
    </tr>
    <tr>
      <th>First Name</th>
      <td><?php echo $_SESSION['username']; ?></td>
    </tr>
    <tr>
      <th>Last Name</th>
      <td><?php echo $_SESSION['username']; ?></td>
    </tr>
  </thead>
</table>
