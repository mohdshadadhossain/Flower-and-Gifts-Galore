<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['order'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $method = mysqli_real_escape_string($conn, $_POST['method']);
    $address = mysqli_real_escape_string($conn, 'flat no. '. $_POST['flat'].', '. $_POST['street'].', '. $_POST['city'].', '. $_POST['country'].' - '. $_POST['pin_code']);
    $placed_on = date('d-M-Y');

    $cart_total = 0;
    $cart_products[] = '';

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    if(mysqli_num_rows($cart_query) > 0){
        while($cart_item = mysqli_fetch_assoc($cart_query)){
            $cart_products[] = $cart_item['name'].' ('.$cart_item['quantity'].') ';
            $sub_total = ($cart_item['price'] * $cart_item['quantity']);
            $cart_total += $sub_total;
        }
    }

    $total_products = implode(', ',$cart_products);

    $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE name = '$name' AND number = '$number' AND email = '$email' AND method = '$method' AND address = '$address' AND total_products = '$total_products' AND total_price = '$cart_total'") or die('query failed');

    if($cart_total == 0){
        $message[] = "<span style='color:green;'>Your Cart is Empty !</span>";
    }elseif(mysqli_num_rows($order_query) > 0){
        $message[] = "<span style='color:red;'>Your Order Placed Already !</span>";
    }else{
        mysqli_query($conn, "INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price, placed_on) VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on')") or die('query failed');
        mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        $message[] = "<span style='color:green;'>Your Order Placed Successfully !</span>";

        // SMS Integration
        // Account details
        $apiKey = urlencode('NTY3NTZmNzk0YjMxNzk0MTRiNjczNjQ2MzM0YjY4NmM=');
        
        // Message details
        $numbers = array($number);
        $sender = urlencode('cpy1495@gmail.com');
        $message = rawurlencode('Your Flowers and Gifts Order Placed Successfully !');
    
        $numbers = implode(',', $numbers);
    
        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
    
        // Send the POST request with cURL
        $ch = curl_init('https://api.txtlocal.com/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        // Process your response here
        echo $response;

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>checkout order</h3>
    <p> <a href="home.php">home</a> / checkout </p>
</section>

<section class="display-order">
    <?php
        $grand_total = 0;
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total += $total_price;
    ?>    
    <p> <?php echo $fetch_cart['name'] ?> <span>(<?php echo '$'.$fetch_cart['price'].'/-'.' x '.$fetch_cart['quantity']  ?>)</span> </p>
    <?php
        }
        }else{
            echo "<p class='empty'><span style='color:red;'>Your cart is empty</p></span>";
        }
    ?>
    <div class="grand-total">grand Total : <span>$<?php echo $grand_total; ?>/-</span></div>
</section>

<section class="checkout">

    <form action="" method="POST">

        <h3>Place Your Order</h3>

        <div class="flex">
            <div class="inputBox">
<<<<<<< HEAD
                <span>Your name :</span>
                <input type="text" name="name" placeholder="Enter your name !" required>
            </div>
            <div class="inputBox">
                <span>Your number :</span>
                <input type="number" name="number" min="0" placeholder="Enter your number !" required>
            </div>
            <div class="inputBox">
                <span>Your email :</span>
                <input type="email" name="email" placeholder="Enter your email !" required>
            </div>
            <div class="inputBox">
                <span>Payment method :</span>
                <select name="method" required>
                    <option value="cash on delivery">Cash on Delivery</option>
                    <option value="credit card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="paytm">PayTm</option>
                </select>
            </div>
            <div class="inputBox">
                <span>Address line 01 :</span>
                <input type="text" name="flat" placeholder="e.g. flat no. !" required>
            </div>
            <div class="inputBox">
                <span>Address line 02 :</span>
                <input type="text" name="street" placeholder="e.g.  street name !" required>
            </div>
            <div class="inputBox">
                <span>City :</span>
                <input type="text" name="city" max='50' placeholder="e.g. Derby !" required>
            </div>
            <div class="inputBox">
                <span>State :</span>
                <input type="text" name="state" max='50' placeholder="e.g. Derbyshire !" required>
            </div>
            <div class="inputBox">
                <span>Country :</span>
                <input type="text" name="country" max='50' placeholder="e.g. United Kingdom !" required>
            </div>
            <div class="inputBox">
                <span>Postal code :</span>
                <input type="text" max='10' name="pin_code" placeholder="e.g. DE23 8QJ !" required>
=======
                <span>your name :</span>
                <input type="text" name="name" placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span>your number :</span>
                <input type="number" name="number" min="0" placeholder="enter your number">
            </div>
            <div class="inputBox">
                <span>your email :</span>
                <input type="email" name="email" placeholder="enter your email">
            </div>
            <div class="inputBox">
                <span>payment method :</span>
                <select name="method">
                    <option value="cash on delivery">cash on delivery</option>
                    <option value="credit card">credit card</option>
                    <option value="paypal">paypal</option>
                    <option value="paytm">paytm</option>
                </select>
            </div>
            <div class="inputBox">
                <span>address line 01 :</span>
                <input type="text" name="flat" placeholder="e.g. flat no.">
            </div>
            <div class="inputBox">
                <span>address line 02 :</span>
                <input type="text" name="street" placeholder="e.g.  streen name">
            </div>
            <div class="inputBox">
                <span>city :</span>
                <input type="text" name="city" placeholder="e.g. mumbai">
            </div>
            <div class="inputBox">
                <span>state :</span>
                <input type="text" name="state" placeholder="e.g. maharashtra">
            </div>
            <div class="inputBox">
                <span>country :</span>
                <input type="text" name="country" placeholder="e.g. india">
            </div>
            <div class="inputBox">
                <span>pin code :</span>
                <input type="number" min="0" name="pin_code" placeholder="e.g. 123456">
>>>>>>> aff1c2409b8f64c06fb9df6e3d2b6bb5616395db
            </div>
        </div>

        <input type="submit" name="order" value="order now" class="btn">

    </form>

</section>






<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>