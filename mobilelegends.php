<?php
// Array of diamond packages
$diamondPackages = [
    ["title" => "5 diamonds", "price" => "₹ 15", "image" => "assets\images\dimond.png"],
    ["title" => "11 diamonds", "price" => "₹ 25", "image" => "assets\images\dimond.png"],
    ["title" => "14 diamonds", "price" => "₹ 30", "image" => "assets\images\dimond.png"],
    ["title" => "22 diamonds", "price" => "₹ 45", "image" => "assets\images\dimond.png"],
    ["title" => "42 diamonds", "price" => "₹ 75", "image" => "assets\images\dimond.png"],
    ["title" => "56 diamonds", "price" => "₹ 95", "image" => "assets\images\dimond.png"],
    ["title" => "86 diamonds", "price" => "₹ 135", "image" => "assets\images\dimond.png"],
    ["title" => "172 diamonds", "price" => "₹ 275", "image" => "assets\images\dimond.png"],
    ["title" => "257 diamonds", "price" => "₹ 380", "image" => "assets\images\dimond.png"],
    ["title" => "344 diamonds", "price" => "₹ 530", "image" => "assets\images\dimond.png"],
    ["title" => "429 diamonds", "price" => "₹ 650", "image" => "assets\images\dimond.png"],
    ["title" => "514 diamonds", "price" => "₹ 730", "image" => "assets\images\dimond.png"],
    ["title" => "706 diamonds", "price" => "₹ 960", "image" => "assets\images\dimond.png"],
    ["title" => "1050 diamonds", "price" => "₹ 1420", "image" => "assets\images\dimond.png"],
    ["title" => "1135 diamonds", "price" => "₹ 1800", "image" => "assets\images\dimond.png"],
    ["title" => "1412 diamonds", "price" => "₹ 1980", "image" => "assets\images\dimond.png"],
    ["title" => "2195 diamonds", "price" => "₹ 3100", "image" => "assets\images\dimond.png"],
    ["title" => "2901 diamonds", "price" => "₹ 3850", "image" => "assets\images\dimond.png"],
    ["title" => "3600 diamonds", "price" => "₹ 4850", "image" => "assets\images\dimond.png"],
    ["title" => "5532 diamonds", "price" => "₹ 6650", "image" => "assets\images\dimond.png"],
    ["title" => "9288 diamonds", "price" => "₹ 10800", "image" => "assets\images\dimond.png"],
    ["title" => "Weekly Pass", "price" => "₹ 170", "image" => "assets/images/weekly pass.png"],
    ["title" => "Starlight Pass", "price" => "₹ 290", "image" => "assets/images/starlight.jpeg"],
    ["title" => "Twilight Pass", "price" => "₹ 710", "image" => "assets/images/twilight pass.jpg"],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/game page.css">
    <title>Mobile Legend</title>
</head>
<body>
    <div class="nav-container">
      <header>
        <div class="logo">ArconHUB</div>
        <nav>
            <a href="index.php">HOME</a>
        </nav>
        <nav>
            <a href="login.php" class="login-signup">LOGIN / SIGN UP</a>
        </nav>  
      </header>
    </div>

    <div class="container">
        <div class="section">
            <h3>1.) Input Data Game</h3>
            <div class="input-row">
                <input type="number" placeholder="Input User ID" class="input-box">
                <select class="input-box">
                    <option>Select Server</option>
                    <option>Asia</option>
                    <option>Europe</option>
                    <option>America</option>
                    <option>Tw,Hk,Mo</option>
                </select>
                <div class="sidebar">
                    <img src="assets/images/mobile legends.png" alt="Mobile legends" width="200px" class="game-image">
                    <div class="instructions">
                        <h3>How to Top Up the cheapest Mobile legends diamonds :</h3>
                        <ol>
                            <li>Enter ID & Server</li>
                            <li>Select grid-item</li>
                            <li>Select Payment</li>
                            <li>Enter WhatsApp No</li>
                            <li>Click Confirm Top Up & make Payment</li>
                            <li>diamonds will automatically be recharged into the game account</li>
                        </ol>
                    </div>
                </div>
            </div>
            <p class="instruction">
                Please enter your User ID & Server and make sure it is correct. Example: 123456789|server-asia.
            </p>
        </div>

        <h3>2.) Select Service Amount</h3>
        
        <div class="container">
    <p class="instruction">
        Please enter your User ID & Server and make sure it is correct. Example: 123456789|server-asia.
    </p>
    <div class="Items grid-container">
        <?php foreach ($diamondPackages as $package): ?>
            <button class="box grid-item">
                <a href="#" class="Item__link">
                    <div class="product-container" style="display: block;">
                        <img src="<?php echo $package['image']; ?>" alt="#" class="Image">
                        <span class="Item__title"><?php echo $package['title']; ?></span>
                    </div>
                    <span class="Item__price"><?php echo $package['price']; ?></span>
                </a>
            </button>
        <?php endforeach; ?>
    </div>
</div>
    <script>
        document.querySelectorAll('.grid-item').forEach(item => {
            item.addEventListener('click', function() {
                // Remove active class from all grid items
                document.querySelectorAll('.grid-item').forEach(el => el.classList.remove('active'));

                // Add active class to the clicked item
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>
