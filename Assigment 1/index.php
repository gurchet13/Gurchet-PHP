<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Subscriber</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <img src="images/logo.png" alt="Logo" height="50">
  <nav>
    <a href="index.php">Add</a> |
    <a href="view.php">View</a>
  </nav>
</header>

<main>
  <h1>Add Subscriber</h1>
  <form method="post" action="">
    <label>Name: <input type="text" name="name" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Interest: <input type="text" name="interest"></label><br>
    <button type="submit" name="submit">Add</button>
  </form>

  <?php
  if (isset($_POST['submit'])) {
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $interest = htmlspecialchars($_POST['interest']);

      $sql = "INSERT INTO subscribers (name, email, interest) VALUES (?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sss", $name, $email, $interest);

      if ($stmt->execute()) {
          echo "<p>Subscriber added successfully!</p>";
      } else {
          echo "<p>Error: " . $stmt->error . "</p>";
      }
  }
  ?>
</main>

<footer>
  <p>&copy; 2025 My Subscriber Portal</p>
</footer>
</body>
</html>
