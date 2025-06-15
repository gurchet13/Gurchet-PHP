<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Subscribers</title>
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
  <h1>Subscriber List</h1>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Interest</th>
      <th>Date</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM subscribers ORDER BY created_at DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['interest']}</td>
            <td>{$row['created_at']}</td>
          </tr>";
    }
    ?>
  </table>
</main>

<footer>
  <p>&copy; 2025 My Subscriber Portal</p>
</footer>
</body>
</html>
