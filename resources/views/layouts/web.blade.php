<!Doctype html>
<html lang="en">

<head>
    
  <title>@yield('title')</title>
  <meta name="description" content="@yield('description')"/>
  {{-- Canonical --}}
  <link rel="canonical" href="@yield('canonical', '')"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Required meta tags -->
  <meta name="Description" content=" Professional Assignment Help Ireland By Our Experts">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Style -->
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/style.css">
  

</head>
<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <script>
 
        // slide 1
        let slideIndex = 1;
        showSlides(slideIndex);

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" activeOne", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " activeOne";
        }

        // slide 2
        slideIndex = 1;
        showSlidesTwo(slideIndex);

        function currentSlideTwo(n) {
        showSlidesTwo(slideIndex = n);
        }

        function showSlidesTwo(n) {
            let i;
            let slides = document.getElementsByClassName("mySlidesTwo");
            let dots = document.getElementsByClassName("dotTwo");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" activeOne", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " activeOne";
        }
    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
</body>

</html>