<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Our products are crafted with the finest ingredients and adhere to strict quality standards, ensuring that your customers receive premium and long-lasting lip color. Our commitment to ethical and cruelty-free practices aligns with the values of conscious consumers, giving your brand a positive reputation in the beauty industry. We offer an extensive and trend-forward selection of lipstick shades to cater to a wide range of customer preferences and skin tones, allowing you to attract a diverse customer base.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We offer customization services, allowing you to create exclusive lipstick shades, packaging designs, and even unique formulas tailored to your brand's vision. Our core offering includes a wide selection of high-quality lipsticks in various formulas, finishes, and shades. We use premium ingredients to ensure the best possible performance, comfort, and longevity.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Ganda Co. is a cosmetic business that was founded by two technopreneurs who shared a passion for organic, eco-friendly, and sustainable products. The company's mission is to provide high-quality, affordable cosmetics that are made using locally sourced, organic ingredients and produced with ethical and sustainable practices.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>


<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>