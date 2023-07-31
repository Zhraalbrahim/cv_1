<?PHP 
require_once 'init.php';
include 'views/header.php';

?>
<section class="home" id="home">

<section class="home " id="home">
   
</section>
<
</section>

<!-- home section ends -->
<!-- about section starts  -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cv classification</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

    body {
      margin: 0;
      box-sizing: border-box;
    }

    /* CSS for header */
 

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
    }

    /* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color:aliceblue;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro p {
      font-size: 20px;
      color: #585858;
      text-transform: uppercase;
      margin: 20px 0;
    }

    

    .achievements {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
    }

    .achievements .work {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .achievements .work i {
      width: fit-content;
      font-size: 50px;
      color: #333333;
      border-radius: 50%;
      border: 2px solid #333333;
      padding: 12px;
    }

    .achievements .work .work-heading {
      font-size: 20px;
      color: #333333;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .achievements .work .work-text {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }

    .about-me {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 80px;
      border-top: 2px solid #eeeeee;
    }

    .about-me img {
      width: 500px;
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .about-me-text h2 {
      display: flex;
      justify-content:center;
      font-size: 60px;
      color:darkblue;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .about-me-text p {
      display: flex;
      justify-content:center;
      font-size: 40px;
      color:rgba(0, 0, 0, 0.5);
      font-family: sans-serif;
      margin: 10px 0;
    }

    /* CSS for footer */
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #302f49;
      padding: 40px 80px;
    }

    .footer .copy {
      color: #fff;
    }
   


  </style>
</head>

<body>

  <main>
    <div class="intro">
      
    <h1>نظام فرز السيرة الذاتية</h1>
    <a href="about.php" class="text-balck"style=" background-color: #5edaf0;color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)">اقرأ أكثر</a>
     
    </div>


</div>

    <div class="achievements">
      <div class="work">
      <img src="assets/img/c.png"/>
        <p class="work-heading">فرز مايقارب 25 سيرة ذاتيه في وقت قياسي  </p>
       
      </div>
      <div class="work">
       <img src="assets/img/s.png"/>
      
        <p class="work-heading">احصائيات التقدم بالعمل %50</p>

      
      </div>
    </div>
    <div class="about-me">
      <div class="about-me-text">
        <h2>عن الشركة</h2>
        <p>شركة الروف لتقنية الإنارة المحدودة تقدم لكم أفضل المنتجات بأفضل الأسعار، تهدف دائمًا إلى إرضاء عملائها قبل البيع وبعده، الإنارة مهمة أخذناها ، لذا فهي ليست وظيفة فحسب بل هي شغف دائم
</p>
      </div>
      <img src="assets/img/fac.png"  class="w-15 rounded mt-4"/>
    </div>
  </main>
      <!-- Grid container 
    <div class="container p-4 pb-0"> 
  <footer class="footer">
    <div class="copy">شركة الروف لتقنية الإنارة المحدودة</div>
    <div class="bottom-links">
      <div class="links">
      <a class="text-white" href="https://alroufled.com/ar/">alroufled.com</a>
      </div>
    
        -->
  
      <!--
      <span>معلومات اضافية</span>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>
      <div class="links">
        <span></span>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
   -->
      </div>
    </div>
  </footer>
   
</body>

</html>




<?PHP include 'views/footer.php'?>












































