<?php
// Database connection settings
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "your_username";
$password = "your_password";
$dbname = "itech_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productTitle = $_POST["product_title"];
    $productDescription = $_POST["product_description"];
    $productSpec = $_POST["product_spec"];
    $productPrice = $_POST["product_price"];
    $productSale = $_POST["product_sale"];
    $category = $_POST["category"];
    $productType = $_POST["product_type"];
    $productKeyword = $_POST["product_keyword"];

    // Handle file upload
    if ($_FILES["product_photo"]["error"] == UPLOAD_ERR_OK) {
        $tempName = $_FILES["product_photo"]["tmp_name"];
        $fileName = $_FILES["product_photo"]["name"];
        $filePath = "uploads/" . $fileName;
        move_uploaded_file($tempName, $filePath);
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO products (product_title, product_description, product_spec, product_price, product_sale, category, product_type, product_keyword, product_photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $productTitle, $productDescription, $productSpec, $productPrice, $productSale, $category, $productType, $productKeyword, $filePath);

    // Execute the statement
    $stmt->execute();

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();

    // Redirect after successful submission (replace "success.php" with your desired success page)
    header("Location: success.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7c52625b7b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="../admin_css/add_product.css">
    <title>ITech Computers</title>
</head>
<body>
    <script src="../main_js/user_report.js"></script>
    <script src="../admin_js/resp_nav.js"></script>
    <script src="../admin_js/dropdown_nav.js"></script>
   <div class="main-container">
        <div class="side-navigation">
            <div class="logo-container">
                <img src="../assets/logo-whte (1).png" alt="logo">
                <h1>ITech computers</h1>
            </div>
            <ul class="nav-lists">
                <li>
                    <a href="../admin/index.html" class="nav-list">
                        <i class="fa-solid fa-gauge"></i>
                        <span>dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-list dropdown-btn active">
                        <i class="fa-solid fa-border-all"></i>
                        <span>product</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <a href="../admin/add_product.html" class="nav-list">
                                    <span>insert product</span>
                                </a>
                            </li>
                            <li>
                                <a href="../admin/view_product.html" class="nav-list">
                                    <span>view product</span>
                                </a>
                            </li>                                      
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-list dropdown-btn">
                        <i class="fa-solid fa-border-all"></i>
                        <span>categories</span>
                    </a>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <a href="../admin/add_product.html" class="nav-list">
                                    <span>insert product</span>
                                </a>
                            </li>
                            <li>
                                <a href="../admin/view_product.html" class="nav-list">
                                    <span>view product</span>
                                </a>
                            </li>                                    
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="" class="nav-list">
                        <i class="fa-solid fa-border-all"></i>
                        <span>dashboard</span>
                    </a>
                </li>
            </ul>
            
        </div>
        <div class="main-section">
            <div class="header-section">
                <div class="header-title">
                    <h1>product</h1>
                </div>
                <div class="header-items">
                    <div class="item-group">
                        <i class="fa-solid fa-bars icon nav-btn"></i>
                    </div>
                    <div class="item-group">
                        <i class="fa fa-envelope icon"></i>
                        <span>
                            messages
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </div>
                    <div class="item-group">
                        <i class="fa-solid fa-bell icon"></i>
                        <span>
                            notification
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </div>
                    <div class="item-group">
                        <div class="item-profile">
                            <img src="../assets/me2.jpg" alt="">
                        </div>
                        <span>
                            definitelynot aldrin
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="second-header">
                <h1 class="second-header-title">insert product</h1>
                <div class="second-header-content">
                    <div class="second-header-tabs">
                        <a href="">dashboard</a>
                        <i class="fa-solid fa-caret-right"></i>
                        <a href="#">product</a>
                        <i class="fa-solid fa-caret-right"></i>
                        <a href="../admin/add_product.html" class="active">insert product</a>
                    </div>
                    <div class="second-header-buttons">
                        <button type="button" class="btn-discard">discard changes</button>
                        <button type="button" class="btn-insert">insert product</button>
                    </div>
                </div>
            </div>
            <div class="product-form-container">
            <form action="" method="POST" enctype="multipart/form-data" class="product-form-content">
                <div class="form-first-section">
                    <div class="form-groups">
                        <div class="form-group-title">
                            <h1>Product Information</h1>
                        </div>
                        <div class="form-group">
                            <label for="product_title">Product Title</label>
                            <input type="text" name="product_title" id="product_title">
                        </div>
                        <div class="form-group">
                            <label for="product_description">Product Specification</label>
                            <textarea name="product_description" id="product_description" cols="30" rows="5" class="product-description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="product_spec">Product Description</label>
                            <textarea name="product_spec" id="product_spec" cols="30" rows="5" class="produc-spec"></textarea>
                        </div>
                    </div>
                    <div class="form-groups">
                        <div class="form-group-title">
                            <h1>Stocks & Pricing</h1>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Product Price</label>
                            <input type="text" name="product_price" id="product_price">
                        </div>
                        <div class="form-group">
                            <label for="product_sale">Product Sale (Optional)</label>
                            <input type="text" name="product_sale" id="product_sale" placeholder="optional">
                        </div>
                    </div>
                </div>
                <div class="form-second-section">
                    <div class="form-groups">
                        <div class="form-group-title">
                            <h1>Product Media</h1>
                        </div>
                        <div class="form-group">
                            <label for="product-photo">Photo Product</label>
                            <div class="form-image-container" id="form-image-container">
                                <!-- Current product photo will be displayed here -->
                            </div>
                            <input type="file" id="product-photo" name="product_photo" accept="image/*">
                        </div>
                    </div>
                    <div class="form-groups">
                        <div class="form-group-title">
                            <h1>Category</h1>
                        </div>
                        <div class="form-group">
                            <select name="category" id="category">
                                <option value="" hidden>Select Product Category</option>
                                <option value="mouse">Mouse</option>
                                <option value="headset">Headset</option>
                                <!-- Add other options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="product_type" id="product_type">
                                <option value="" hidden>Select Product Type</option>
                                <option value="accessories">Accessories</option>
                                <option value="main">Main</option>
                                <!-- Add other options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_keyword">Product Keyword</label>
                            <input type="text" name="product_keyword" id="product_keyword">
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </div>
   </div>
</body>
</html>