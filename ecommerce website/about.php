<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At our eCommerce gadgets web store, choosing us means gaining access to a world of exceptional benefits. With a team of tech enthusiasts, we curate a wide selection of cutting-edge gadgets, ensuring you receive only the best. Quality is paramount to us, so we collaborate with reputable brands, backed by a hassle-free return policy for added peace of mind. Our user-friendly interface, secure transactions, and fast shipping further elevate your shopping experience. Engage with our vibrant tech community through forums and personalized recommendations. With sustainability initiatives, loyalty rewards, and industry partnerships, we cater to your every tech need while making a positive impact.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">


      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>"Wow! I couldn't be happier with my experience at the eCommerce gadgets web store. The selection was amazing, and the quality of the product I purchased exceeded my expectations. The website was so easy to navigate, and I appreciated the personalized recommendations that helped me find the perfect gadget. The customer support team was incredibly helpful and responsive to my queries. Fast shipping and secure packaging made the entire process smooth and worry-free. I highly recommend this store to all tech enthusiasts!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Raksha Shrestha</h3>
      </div>
      <div class="swiper reviews-slider">

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <div class="stars">
            <p>"Shopping at the eCommerce gadgets web store was an absolute delight! The variety of gadgets available was impressive, and I found exactly what I was looking for. The website's user-friendly interface made it a breeze to compare products and make an informed decision. My order arrived promptly, and the product was in perfect condition. The customer support team was friendly and efficient in resolving a minor inquiry I had. I will definitely be coming back for more tech goodies in the future!"</p>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ankit Singh</h3>
      </div>

    

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>