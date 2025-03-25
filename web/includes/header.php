<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Math Fun!</a>
            <div class="d-flex">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <?php if($_SESSION['is_admin']): ?>
                        <a href="admin.php" class="btn btn-light me-2">Admin</a>
                    <?php endif; ?>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>