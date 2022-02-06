<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="app.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <title>Compatibility</title>
    </head>

    <body>
        <?php include("./components/navbar.php") ?>

        <?php include("./components/home_slideshow.php") ?>
        
        <div class="body">
            <?php include("./components/home_more_information.php") ?>
            
            <?php include("./components/about_us.php") ?>
        
            <div class="line">
                
            </div>

            <?php include("./components/clients_say.php") ?>
        </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
        
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        
         }
    </script>
    </body>
</html> 

