<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}
include "header.php"; ?>

<body>

<?php include "footer.php"; ?>

</body>
</html>