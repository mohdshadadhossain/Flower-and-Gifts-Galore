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
    <p> <a href="home.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We offer the highest quality flowers and gifts, personalized service, and exceptional value. Our team of experts carefully handpicks and crafts every arrangement and gift, ensuring that each order is a unique work of art. Plus, with our wide selection of fresh blooms and unique gifts, we have everything you need to make your next occasion unforgettable. Click the "Shop Now" button to experience the Flower and Gifts Galore difference today!</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We specialize in providing personalized service to meet your needs, whether you are celebrating a birthday, anniversary, wedding, or just want to show someone how much you care. We also offer same-day delivery on select arrangements and gifts, ensuring that your order arrives when you need it.</p>
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
            <p>We take great pride in our work and always go the extra mile to ensure that every order is a unique and memorable experience for our customers.But don't just take our word for it - our clients have spoken and their positive reviews speak volumes. We invite you to read our client reviews and see for yourself why Flower and Gifts Galore is the go-to destination for all your floral and gifting needs.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.jpg" alt="">
            <p>I sent flowers to my mom for her birthday and she was absolutely delighted! The arrangement was stunning and the delivery was right on time.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mohammed Shadad Hossain</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>I ordered a gift basket for my best friend's wedding and it was a huge hit. The items were beautifully presented.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Chaya</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>I can always count on this company to deliver the most gorgeous flowers. The bouquets are always fresh and vibrant.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mehak Bahri</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>I ordered a custom gift box for my sister's graduation and it was the perfect way to celebrate her achievement. The items were thoughtful and unique.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Suganya Raju</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>I was so impressed with the level of detail and care that went into my order. The team really took the time to understand my needs and delivered a gift that exceeded my expectations.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Adeel Akram</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>I sent flowers to my wife for our anniversary and she was over the moon. The arrangement was breathtaking and the delivery was seamless. Thank you for helping me make her day special!.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Hina</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>