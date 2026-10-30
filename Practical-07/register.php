<?php
$message = "";
$type = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $formType = $_POST["form_type"] ?? "";

    if ($formType === "registration") {
        $name = trim($_POST["name"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $mobile = trim($_POST["mobile"] ?? "");

        if ($name === "" || !filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/^[0-9]{10}$/", $mobile)) {
            $message = "Invalid registration details. Please check your inputs.";
            $type = "error";
        } else {
            $file = __DIR__ . "/registrations.json";
            $records = [];

            if (file_exists($file)) {
                $data = json_decode(file_get_contents($file), true);
                if (is_array($data)) {
                    $records = $data;
                }
            }

            $records[] = [
                "name" => $name,
                "email" => $email,
                "mobile" => $mobile,
                "submitted_at" => date("Y-m-d H:i:s")
            ];

            $json = json_encode($records, JSON_PRETTY_PRINT);

            if ($json !== false && file_put_contents($file, $json, LOCK_EX) !== false) {
                $message = "Registration submitted successfully!";
                $type = "success";
            } else {
                $message = "Error saving registration data.";
                $type = "error";
            }
        }

    } elseif ($formType === "contact") {
        $name = trim($_POST["name"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $messageText = trim($_POST["message"] ?? "");

        if ($name === "" || !filter_var($email, FILTER_VALIDATE_EMAIL) || $messageText === "") {
            $message = "Invalid contact details. Please complete all fields.";
            $type = "error";
        } else {
            $file = __DIR__ . "/contacts.json";
            $records = [];

            if (file_exists($file)) {
                $data = json_decode(file_get_contents($file), true);
                if (is_array($data)) {
                    $records = $data;
                }
            }

            $records[] = [
                "name" => $name,
                "email" => $email,
                "message" => $messageText,
                "submitted_at" => date("Y-m-d H:i:s")
            ];

            $json = json_encode($records, JSON_PRETTY_PRINT);

            if ($json !== false && file_put_contents($file, $json, LOCK_EX) !== false) {
                $message = "Contact message submitted successfully!";
                $type = "success";
            } else {
                $message = "Error saving contact message.";
                $type = "error";
            }
        }
    } else {
        $message = "Invalid form submission.";
        $type = "error";
    }
}

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudentHub - Form Status</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <div class="brand">
      <div class="logo">➵</div>
      <div>
        <h2>StudentHub</h2>
        <p>Student Portal</p>
      </div>
    </div>
  </header>

  <main class="container">
    <section class="card center" style="max-width: 550px; margin: 40px auto;">
      <h1>StudentHub</h1>

      <?php if ($message !== ""): ?>
        <div class="status-box <?= e($type) ?>">
          <?= e($message) ?>
        </div>
      <?php endif; ?>

      <div style="margin-top: 25px; display: flex; gap: 12px; justify-content: center;">
        <a href="register.html" class="btn">Back to Registration</a>
        <a href="contact.html" class="btn" style="background: var(--muted);">Back to Contact</a>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <p>&copy; 2026 StudentHub. All rights reserved.</p>
  </footer>
</body>
</html>
