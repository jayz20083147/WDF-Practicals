<?php
session_start();
include 'db_connect.php';

$id = (int)($_GET['id'] ?? 0);
$sql = "SELECT * FROM events WHERE id = $id";
$result = mysqli_query($conn, $sql);
$event = mysqli_fetch_assoc($result);

if (!$event) {
    header("Location: manage_events.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Event | StudentHub</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <div class="brand">
      <div class="logo">➵</div>
      <div>
        <h1>StudentHub</h1>
        <p class="tagline">Event Management</p>
      </div>
    </div>
    <nav class="site-nav">
      <a href="manage_events.php">Manage Events</a>
      <a href="add_event.html">+ Add Event</a>
    </nav>
  </header>

  <main class="container">
    <div class="card" style="max-width:500px; margin:40px auto;">
      <h2>Edit Event</h2>
      <form method="POST" action="process_edit_event.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $event['id']; ?>">

        <div class="form-group">
          <label>Event Name</label>
          <input type="text" name="event_name" value="<?php echo htmlspecialchars($event['event_name']); ?>" required>
        </div>

        <div class="form-group">
          <label>Event Date</label>
          <input type="date" name="event_date" value="<?php echo htmlspecialchars($event['event_date']); ?>" required>
        </div>

        <div class="form-group">
          <label>Venue</label>
          <input type="text" name="venue" value="<?php echo htmlspecialchars($event['venue']); ?>" required>
        </div>

        <div class="form-group">
          <label>Update Poster (Optional)</label>
          <input type="file" name="poster" accept="image/png, image/jpeg, image/jpg">
          <?php if (!empty($event['poster'])) { ?>
            <small style="display:block; margin-top:6px; color:var(--text-muted);">Current: <strong><?php echo htmlspecialchars($event['poster']); ?></strong></small>
          <?php } ?>
        </div>

        <div style="margin-top:15px; display:flex; gap:10px;">
          <button type="submit">Update Event</button>
          <a href="manage_events.php" class="btn" style="background:#6c757d;">Back</a>
        </div>
      </form>
    </div>
  </main>

  <footer class="site-footer">
    <p>&copy; 2026 StudentHub. All rights reserved.</p>
  </footer>
</body>
</html>
