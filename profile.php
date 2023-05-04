<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      .box {
         border-radius: 7px;
         background-color: rgba(255, 255, 255, 0.2);
         backdrop-filter: blur(5px);
      }
	</style>
</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<section class="user-details">

   <div class="user">
      <?php
         
      ?>
      <img src="images/user-icon.png" alt="">
      <p><i class="fas fa-user"></i><span><span><?= $fetch_profile['name']; ?></span></span></p>
      <p><i class="fas fa-phone"></i><span><?= $fetch_profile['number']; ?></span></p>
      <p><i class="fas fa-envelope"></i><span><?= $fetch_profile['email']; ?></span></p>
      <a href="update_profile.php" class="btn">update info</a>
      <p class="address"><i class="fas fa-map-marker-alt"></i><span><?php if($fetch_profile['address'] == ''){echo 'please enter your address';}else{echo $fetch_profile['address'];} ?></span></p>
      <a href="update_address.php" class="btn">update address</a>
   </div>

</section>










<?php include 'components/footer.php'; ?>







<!-- custom js file link  -->
<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>

    <script>
        VANTA.FOG({
         el: document.body,
         mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  highlightColor: 0xffffff,
  midtoneColor: 0xf4a26c,
  lowlightColor: 0xd9562a,
  blurFactor: 0.16,
  speed: 0.30,
  zoom: 1.20
          })
    </script>

</body>
</html>