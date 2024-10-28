<?php
// Database connection
include 'db.php';

// Add category
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_category"])) {
    $category_name = $conn->real_escape_string($_POST["category_name"]);
    $conn->query("INSERT INTO categories (name) VALUES ('$category_name')");
    header("Location: add_category.php");
    exit();
}

// Fetch categories
$categories = $conn->query("SELECT * FROM categories");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="mb-4">Add Category</h2>
        <form method="POST" class="mb-4">
            <div class="input-group">
                <input type="text" name="category_name" class="form-control" placeholder="Category Name" required>
                <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
            </div>
        </form>

        <!-- Display Categories -->
        <h4>Existing Categories</h4>
        <ul class="list-group">
            <?php while ($category = $categories->fetch_assoc()) { ?>
                <li class="list-group-item"><?php echo $category["name"]; ?></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
