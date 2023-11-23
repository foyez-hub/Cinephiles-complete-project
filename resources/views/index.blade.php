@extends('frontend')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active loopVideo">

      <video class="embed-responsive embed-responsive-4by3 img-fluid" autoplay loop muted>
        <source src="videos/Avatar.mp4" type="video/mp4" />
      </video>

      <div class="carousel-caption d-none d-md-block">
        <h2 style="color:#4dbf00;">Avatar</h5>
          <p style="color:white;">
            Jake, who is paraplegic, replaces his twin on the Na'vi inhabited Pandora for a corporate mission. After the natives accept him as one of their own, he must decide where his loyalties lie
          </p>
      </div>
    </div>





    <div class="carousel-item loopVideo">
      <video class=" embed-responsive embed-responsive-4by3 img-fluid " autoplay loop muted>
        <source src="videos/Conjuring.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h2 style="color:#4dbf00;">Conjuring</h5>
          <p style="color:white;">
            The Perron family moves into a farmhouse where they experience paranormal phenomena. They consult demonologists, Ed and Lorraine Warren, to help them get rid of the evil entity haunting them. </p>
      </div>
    </div>


    <div class="carousel-item loopVideo">
      <video class="embed-responsive embed-responsive-4by3 img-fluid" autoplay loop muted>
        <source src="videos/Batman.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h2 style="color:#4dbf00;"> THE BATMAN</h5>
          <p>
            Batman is called to intervene when the mayor of Gotham City is murdered. Soon, his investigation leads him to uncover a web of corruption, linked to his own dark past.
          </p>
      </div>
    </div>

    <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon carousleClass" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon carousleClass" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>


  </div>

</div>

<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">Recommend</h1>
<div id="carousel4" class="container">
  <div class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button4" class="left-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button4" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items4">





    @foreach ($users as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>

      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
        <i class="fas fa-info-circle"></i>

      </button>

      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->

<script>
    var carousel = {};
    carousel.e = document.getElementById("carousel4");
    carousel.items = document.getElementById("carousel-items4");
    carousel.leftScroll = document.getElementById("left-scroll-button4");
    carousel.rightScroll = document.getElementById("right-scroll-button4");

    carousel.items.addEventListener("mousewheel", handleMouse, false);
    carousel.items.addEventListener("scroll", scrollEvent);
    carousel.leftScroll.addEventListener("click", leftScrollClick);
    carousel.rightScroll.addEventListener("click", rightScrollClick);

    setLeftScrollOpacity();
    setRightScrollOpacity();

    function handleMouse(e) {
      MouseWheelHandler(e, carousel.items);
    }

    function leftScrollClick() {
      MouseWheelHandler(100, carousel.items);
    }

    function rightScrollClick() {
      MouseWheelHandler(-100, carousel.items);
    }

    function scrollEvent(e) {
      setLeftScrollOpacity();
      setRightScrollOpacity();
    }

    function setLeftScrollOpacity() {
      if (isScrolledAllLeft()) {
        carousel.leftScroll.style.opacity = 0;
      } else {
        carousel.leftScroll.style.opacity = 1;
      }
    }

    function isScrolledAllLeft() {
      if (carousel.items.scrollLeft === 0) {
        return true;
      } else {
        return false;
      }
    }

    function isScrolledAllRight() {
      if (carousel.items.scrollWidth > carousel.items.offsetWidth) {
        if (
          carousel.items.scrollLeft + carousel.items.offsetWidth ===
          carousel.items.scrollWidth
        ) {
          return true;
        }
      } else {
        return true;
      }

      return false;
    }

    function setRightScrollOpacity() {
      if (isScrolledAllRight()) {
        carousel.rightScroll.style.opacity = 0;
      } else {
        carousel.rightScroll.style.opacity = 1;
      }
    }

</script>




<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">New Releases</h1>
<div id="carousel1" class="container">
  <div class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button1" class="left-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button1" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel1-items">





    @foreach ($newmovies as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>

      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
        <i class="fas fa-info-circle"></i>

      </button>

      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->

<script>
  window.onload = function() {
    var carousel = {};
    carousel.e = document.getElementById("carousel1");
    carousel.items = document.getElementById("carousel1-items");
    carousel.leftScroll = document.getElementById("left-scroll-button1");
    carousel.rightScroll = document.getElementById("right-scroll-button1");

    carousel.items.addEventListener("mousewheel", handleMouse, false);
    carousel.items.addEventListener("scroll", scrollEvent);
    carousel.leftScroll.addEventListener("click", leftScrollClick);
    carousel.rightScroll.addEventListener("click", rightScrollClick);

    setLeftScrollOpacity();
    setRightScrollOpacity();

    function handleMouse(e) {
      MouseWheelHandler(e, carousel.items);
    }

    function leftScrollClick() {
      MouseWheelHandler(100, carousel.items);
    }

    function rightScrollClick() {
      MouseWheelHandler(-100, carousel.items);
    }

    function scrollEvent(e) {
      setLeftScrollOpacity();
      setRightScrollOpacity();
    }

    function setLeftScrollOpacity() {
      if (isScrolledAllLeft()) {
        carousel.leftScroll.style.opacity = 0;
      } else {
        carousel.leftScroll.style.opacity = 1;
      }
    }

    function isScrolledAllLeft() {
      if (carousel.items.scrollLeft === 0) {
        return true;
      } else {
        return false;
      }
    }

    function isScrolledAllRight() {
      if (carousel.items.scrollWidth > carousel.items.offsetWidth) {
        if (
          carousel.items.scrollLeft + carousel.items.offsetWidth ===
          carousel.items.scrollWidth
        ) {
          return true;
        }
      } else {
        return true;
      }

      return false;
    }

    function setRightScrollOpacity() {
      if (isScrolledAllRight()) {
        carousel.rightScroll.style.opacity = 0;
      } else {
        carousel.rightScroll.style.opacity = 1;
      }
    }
  };
</script>



<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">Old Movies</h1>
<div id="carousel2" class="container">
  <div class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button2" class="left-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button2" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items2">





    @foreach ($oldmovies as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>

      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
        <i class="fas fa-info-circle"></i>

      </button>

      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->

<script>
    var carousel = {};
    carousel.e = document.getElementById("carousel2");
    carousel.items = document.getElementById("carousel-items2");
    carousel.leftScroll = document.getElementById("left-scroll-button2");
    carousel.rightScroll = document.getElementById("right-scroll-button2");

    carousel.items.addEventListener("mousewheel", handleMouse, false);
    carousel.items.addEventListener("scroll", scrollEvent);
    carousel.leftScroll.addEventListener("click", leftScrollClick);
    carousel.rightScroll.addEventListener("click", rightScrollClick);

    setLeftScrollOpacity();
    setRightScrollOpacity();

    function handleMouse(e) {
      MouseWheelHandler(e, carousel.items);
    }

    function leftScrollClick() {
      MouseWheelHandler(100, carousel.items);
    }

    function rightScrollClick() {
      MouseWheelHandler(-100, carousel.items);
    }

    function scrollEvent(e) {
      setLeftScrollOpacity();
      setRightScrollOpacity();
    }

    function setLeftScrollOpacity() {
      if (isScrolledAllLeft()) {
        carousel.leftScroll.style.opacity = 0;
      } else {
        carousel.leftScroll.style.opacity = 1;
      }
    }

    function isScrolledAllLeft() {
      if (carousel.items.scrollLeft === 0) {
        return true;
      } else {
        return false;
      }
    }

    function isScrolledAllRight() {
      if (carousel.items.scrollWidth > carousel.items.offsetWidth) {
        if (
          carousel.items.scrollLeft + carousel.items.offsetWidth ===
          carousel.items.scrollWidth
        ) {
          return true;
        }
      } else {
        return true;
      }

      return false;
    }

    function setRightScrollOpacity() {
      if (isScrolledAllRight()) {
        carousel.rightScroll.style.opacity = 0;
      } else {
        carousel.rightScroll.style.opacity = 1;
      }
    }

</script>


<!-- movie slider start  -->

<h1 style="color:#fff;" class="movieScroolHeader mt-2">DRAMA</h1>
<div id="carousel5" class="container">
  <div class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button5" class="left-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button5" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items5">





    @foreach ($DRAMA as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>

      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
        <i class="fas fa-info-circle"></i>

      </button>

      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->

<script>
    var carousel = {};
    carousel.e = document.getElementById("carousel5");
    carousel.items = document.getElementById("carousel-items5");
    carousel.leftScroll = document.getElementById("left-scroll-button5");
    carousel.rightScroll = document.getElementById("right-scroll-button5");

    carousel.items.addEventListener("mousewheel", handleMouse, false);
    carousel.items.addEventListener("scroll", scrollEvent);
    carousel.leftScroll.addEventListener("click", leftScrollClick);
    carousel.rightScroll.addEventListener("click", rightScrollClick);

    setLeftScrollOpacity();
    setRightScrollOpacity();

    function handleMouse(e) {
      MouseWheelHandler(e, carousel.items);
    }

    function leftScrollClick() {
      MouseWheelHandler(100, carousel.items);
    }

    function rightScrollClick() {
      MouseWheelHandler(-100, carousel.items);
    }

    function scrollEvent(e) {
      setLeftScrollOpacity();
      setRightScrollOpacity();
    }

    function setLeftScrollOpacity() {
      if (isScrolledAllLeft()) {
        carousel.leftScroll.style.opacity = 0;
      } else {
        carousel.leftScroll.style.opacity = 1;
      }
    }

    function isScrolledAllLeft() {
      if (carousel.items.scrollLeft === 0) {
        return true;
      } else {
        return false;
      }
    }

    function isScrolledAllRight() {
      if (carousel.items.scrollWidth > carousel.items.offsetWidth) {
        if (
          carousel.items.scrollLeft + carousel.items.offsetWidth ===
          carousel.items.scrollWidth
        ) {
          return true;
        }
      } else {
        return true;
      }

      return false;
    }

    function setRightScrollOpacity() {
      if (isScrolledAllRight()) {
        carousel.rightScroll.style.opacity = 0;
      } else {
        carousel.rightScroll.style.opacity = 1;
      }
    }

</script>


<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">HORROR</h1>
<div id="carousel" class="container">
  <div class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button" class="left-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items">





    @foreach ($HORROR as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>

      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
        <i class="fas fa-info-circle"></i>

      </button>

      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->


<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">COMEDY</h1>
<div id="carousel" class="container">
  <div class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button" class="left-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items">





    @foreach ($COMEDY as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>

      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
        <i class="fas fa-info-circle"></i>

      </button>

      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->


<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">SCIENCE FICTION</h1>
<div id="carousel" class="container">
  <div class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button" class="left-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items">





    @foreach ($SCIENCEFICTION as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>

      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
        <i class="fas fa-info-circle"></i>

      </button>

      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->



@endsection