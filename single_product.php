<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- this is icons link -->
</head>
<body>



    <section id="menu">
      <form action="pay.php" method="post">
        <div class="container">
          <div class="heading3">Menu</div>
        </div>

        <div class="container" id="container2">

          <div class="row">

            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <img src="./images/m1.png" alt="">

                <div class="card-body">
                  <div class="star text-center">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                  </div>

                  <h3>Coffee</h3>
                  <p>$99 <strike>$100</strike> <span class="fa-solid fa-cart-shopping"></span></p>

                </div>

              </div>
            </div>


            <div>
              <br><br>
              <input type="hidden" name="price" id="price" value="100">
              <input type="email" name="emailid" id="emailid" placeholder="enter emailID"><br><br>
              <input type="number" name="phoneno" id="phoneno" placeholder="mobile no">
              
                <select name="qnty" id="qnty">
                
                <option>1</option>
                <option>2</option>
                </select>
                <input type="hidden" name="order_id" value= "<?php echo "ORDS" . rand(10000,99999999);?>">
                <button type="submit" id="submit-btn" class="btn">BUY NOW</button>
            </div>
          </form>
        </section>




    <!-- footer start -->
    <footer id="footer">
        <div class="footer-logo text-center"><img src="./images/logo.png" alt=""></div>
        <div class="socail-links text-center">
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-youtube"></i>
          <i class="fa-brands fa-pinterest-p"></i>
        </div>

        <div class="credits text-center">
          Dseigned By <a href="#"> <span>SA Coding</span></a>
        </div>

        <div class="copyright text-center">
          &copy; Copyright <strong> <span>Coffee Shop</span></strong>. All Rights reserved
        </div>


      </footer>
      <!-- footer end -->
    
</body>
</html>