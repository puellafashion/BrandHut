<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "brandhut");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Success and error message variables
$success_message = "";
$error_message = "";

// Add product
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    $name = $conn->real_escape_string($_POST["product_name"]);
    $description = $conn->real_escape_string($_POST["product_description"]);
    $category_id = (int)$_POST["category_id"];
    
    // Image upload path
    $targetDir = "images/product_images/";
    $front_image = $targetDir . basename($_FILES["front_image"]["name"]);
    $back_image = $targetDir . basename($_FILES["back_image"]["name"]);
    
    // Move uploaded files and check for errors
    if (move_uploaded_file($_FILES["front_image"]["tmp_name"], $front_image) && move_uploaded_file($_FILES["back_image"]["tmp_name"], $back_image)) {
        // Insert into database
        $insert_result = $conn->query("INSERT INTO products (name, description, front_image, back_image, category_id) VALUES ('$name', '$description', '$front_image', '$back_image', $category_id)");
        
        if ($insert_result) {
            // Set success message
            $success_message = "Product added successfully!";
        } else {
            // Set error message for query failure
            $error_message = "Failed to add product. Please try again.";
        }
    } else {
        // Set error message for file upload failure
        $error_message = "Failed to upload images. Please check file permissions.";
    }
}

// Fetch categories
$categories = $conn->query("SELECT * FROM categories");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4 text-center">Add Product</h2>

        <?php if ($success_message) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $success_message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <?php if ($error_message) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $error_message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="product_description" class="form-label">Product Description</label>
                <textarea name="product_description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" class="form-select" required>
                    <?php while ($category = $categories->fetch_assoc()) { ?>
                        <option value="<?php echo $category["id"]; ?>"><?php echo $category["name"]; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="front_image" class="form-label">Front Image</label>
                <input type="file" name="front_image" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="back_image" class="form-label">Back Image</label>
                <input type="file" name="back_image" class="form-control" required>
            </div>
            <button type="submit" name="add_product" class="btn btn-success w-100">Add Product</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
