<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Culminating Learning Evidence (Endterm) </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="cursor-1"></div>
<div class="cursor-2"></div>


<div id="menu-bars" class="fas fa-bars"></div>

<header>

    <a href="#" class="logo"> <span>My</span> Portfolio </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">Designer's Profile</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>

     <div class="follow">
        <a href="https://www.facebook.com/depaula.la/" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/loweleyn/" class="fab fa-twitter"></a>
        <a href="https://instagram.com/lowelyn/" class="fab fa-instagram"></a>
    </div>

</header>

<section class="home" id="home">

    <div class="content">
        <span class="hi"> Welcome! </span>
        <h3> I am <span> Lowelyn Ann </span> </h3>
        <p data-aos="fade-up" class="info"> a 1st year Information Technology student at University of St. La Salle. </p>
        <a data-aos="fade-up" href="#about" class="btn">ABOUT ME</a>
    </div>

    <div class="image">
        <img src="ppp.jpg" alt="">
    </div>

</section>


<section class="about" id="about">

<h1 class="heading"> about <span> me </span> </h1>

<div class="row-1">

    <div class="image">
        <img src="pp.jpg" alt="">
    </div>

    <div class="content">
        <h3> My name is Lowelyn Ann De Paula </h3>
        <div class="box-container">
            <div class="box">
                <p> <span> Age : </span> 19 </p>
                <p> <span> Gender : </span> Female </p>
                <p> <span> Course : </span> Information Technology </p>
            </div>
            <div class="box">
                <p> <span> Phone : </span> +639916473823 </p>
                <p> <span> Email : </span> kcdpaula@gmail.com </p>
                <p> <span> Country : </span> Philippines </p>
            </div>
        </div>
    </div>

</div>


<section class="portfolio" id="projects">

    <h1 class="heading"> <span> my </span> projects </h1>

    <div class="box-container">

         <div class="box">
            <img src="2.png" alt="">
            <h3> Learning Task 2 </h3>
            <div class="icons">
                <a href="https://depaula-lt2.herokuapp.com/LT2/Recipes.html" data target="_blank" class="fas fa-link"></a>
            </div>
        </div>

        <div class="box">
            <img src="3.png" alt="">
            <h3> Learning Task 3 </h3>
            <div class="icons">
                <a href="https://depaula-lt4.herokuapp.com/LT4/index.html" data target="_blank" class="fas fa-link"></a>
            </div>
        </div>

        <div class="box">
            <img src="4.png" alt="">
            <h3> Learning Task 4 </h3>
            <div class="icons">
                <a href="https://depaula-lt4.herokuapp.com/LT4/index.html" data target="_blank" class="fas fa-link"></a>
            </div>
        </div>

        <div class="box">
            <img src="5.png" alt="">
            <h3> Learning Task 5 </h3>
            <div class="icons">
                <a href="https://github.com/kcdepaula/learningtasks/tree/main/LT5" data target="_blank" class="fas fa-link"></a>
            </div>
        </div>
		
		<div class="box">
            <img src="6.png" alt="">
            <h3> Midterm Exam </h3>
            <div class="icons">
                <a href="https://depaula-lt2.herokuapp.com/CLE1MT/index.html" data target="_blank" class="fas fa-link"></a>
            </div>
        </div>

    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading"> Contact <span> Me </span> </h1>

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>My Email</h3>
            <p>kcdpaula@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>My Number</h3>
            <p>+639916473823</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>My Address</h3>
            <p>Bacolod City, Philippines-6100</p>
        </div>

    </div>

    <div class="row">

        <form action="">

            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">

            <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>

            <input type="submit" class="btn" value="send message">

        </form>
    </div>


</section>

<footer class="footer"> &copy; Lowelyn Ann De Paula @ <?php echo date('Y'); ?> 1st Year <span>Bachelor of Science in Information Technology</span> </footer>






<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:900,
      delay:200
   });

</script>

</body>
</html>