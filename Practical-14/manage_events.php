<?php
session_start();
include 'db_connect.php';

$sql = "SELECT * FROM events ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Events | StudentHub</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <div class="brand">
      <div class="logo">➵</div>
      <div>
        <h1>StudentHub</h1>
        <p class="tagline">Admin Event Dashboard</p>
      </div>
    </div>
    <nav class="site-nav">
      <a href="../Practical-10/home.php">Home</a>
      <a href="../Practical-14/admin_dashboard.php">Dashboard</a>
      <a href="../Practical-10/logout.php" class="btn" style="background:var(--error);">Logout</a>
    </nav>
  </header>

  <main class="container">
    <div class="card">
      <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <h2>Manage Events</h2>
        <a href="add_event.html" class="btn" style="background:#28a745;">+ Add Event</a>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Poster</th>
            <th>Event Name</th>
            <th>Date</th>
            <th>Venue</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if (mysqli_num_rows($result) === 0) { ?>
            <tr>
              <td colspan="6" style="text-align:center; padding:20px; color:var(--text-muted);">No events found. Click "+ Add Event" to upload your first event.</td>
            </tr>
          <?php } else { ?>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td>
                  <?php if (!empty($row['poster']) && file_exists('uploads/' . $row['poster'])) { ?>
                    <img src="uploads/<?php echo htmlspecialchars($row['poster']); ?>" width="60" height="60" style="object-fit:cover; border-radius:4px;">
                  <?php } else { ?>
                    <div style="width:60px; height:60px; background:#e2e8f0; border-radius:4px; display:flex; align-items:center; justify-content:center; font-size:10px; color:#64748b;">No Image</div>
                  <?php } ?>
                </td>
                <td><?php echo htmlspecialchars($row['event_name']); ?></td>
                <td><?php echo htmlspecialchars($row['event_date']); ?></td>
                <td><?php echo htmlspecialchars($row['venue']); ?></td>
                <td>
                  <a href="edit_event.php?id=<?php echo $row['id']; ?>" style="color:#f39c12; margin-right:12px; font-weight:600; text-decoration:none;">Edit</a>
                  <a href="process_delete_event.php?id=<?php echo $row['id']; ?>" style="color:red; font-weight:600; text-decoration:none;" onclick="return confirm('Are you sure you want to delete this event?');">Delete</a>
                </td>
              </tr>
            <?php } ?>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </main>

  <footer class="site-footer">
    <p>&copy; 2026 StudentHub. All rights reserved.</p>
  </footer>
</body>
</html>
