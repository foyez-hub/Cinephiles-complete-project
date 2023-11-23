<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<style>
  .suggestion-dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;
    background-color: #f1f1f1;
    width: 100%;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .suggestion-dropdown li {
    padding: 8px 12px;
    cursor: pointer;
  }

  .suggestion-dropdown li:hover {
    background-color: #ddd;
  }

  .frontText {
    color: #4dbf00;
    font-size: 16px;
    font-weight: bold;
    font-family: Arial, sans-serif;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 1.5;

  }

  .input-group {
    display: flex;
    flex-wrap: wrap;
    padding: 10px;

    justify-content: center;
    align-items: center;
    margin: 20px 0;
  }

  #searchbar {
    width: 300px;
    padding: 10px;
    border-radius: 5px 0 0 5px;
    border: none;
  }

  #searchbtn {
    padding: 10px 10px;
    border-radius: 0 2px 5px 0;
    border: none;
    margin-right: 10px;
    background-color: #4dbf00;
    color: #fff;
    cursor: pointer;
  }

  #search-results {
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    display: none;

  }
</style>


<style>
  #friendlist1 {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 9999;
  }

  #popup-btn {
    background-color: #4dbf00;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  #friendlist1 {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 9999;
    max-width: 400px;
    overflow-y: auto;
    max-height: 500px;
  }

  #friendlist1 h2 {
    margin-top: 0;
  }

  #friendlist1 ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  #friendlist1 li {
    display: flex;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
  }

  #friendlist1 img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
  }

  #friendlist1 button {
    margin-left: auto;
    background-color: #4dbf00;
    color: #fff;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    transition: all 0.2s ease;
  }

  #friendlist1 button:hover {
    background-color: #f33;
  }

  .bell-icon {
    color: #4dbf00;
  }

  .notification-icon {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 50px;
    background-color: white;
    border-radius: 30%;
    text-align: center;
    line-height: 50px;
    color: #fff;
    margin-right: 10px;
    /* add 10px margin to the right of the icon */
    cursor: pointer;
  }

  .count-bar {
    position: absolute;
    top: 0;
    right: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: whitesmoke;
    color: #4dbf00;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>


<style>
  #moviedetails {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: red;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 9999;
  }

  #Detailsbtn {
    background-color: #4dbf00;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  #moviedetails {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 9999;
    max-width: 400px;
    overflow-y: auto;
    max-height: 500px;
  }

  #moviedetails h2 {
    margin-top: 0;
  }

  #moviedetails ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  #moviedetails li {
    display: flex;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
  }

  #moviedetails img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
  }





  #moviedetails-close-btn {
    position: absolute;
    /* position the button relative to its closest positioning ancestor */
    top: 0;
    left: 0;
    width: 24px;
    /* adjust the width and height to match the image size */
    height: 24px;
    border: none;
    /* remove the button border */
    cursor: pointer;
    /* change the cursor to a pointer when hovering over the button */
  }
</style>

<style>
  /* Style the search container */
  .search-container1 {
    position: relative;
    display: inline-block;


  }

  /* Style the search input */
  .search-container1 input[type=text] {
    padding: 8px;
    border: none;
    border-radius: 4px;

  }

  /* Style the dropdown */
  .dropdown1 {
    position: absolute;
    z-index: 1;
    list-style: none;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  }

  /* Style the dropdown links */
  .dropdown1 li a {
    display: block;
    padding: 8px 12px;
    text-decoration: none;
    color: #333;
  }

  /* Add a hover effect to the dropdown links */
  .dropdown1 li a:hover {
    background-color: #f1f1f1;
  }

  /* Show the dropdown when the input field receives focus */
  .search-container1 input[type=text]:focus+.dropdown1 {
    display: block;

  }
</style>

<style>
  /* Modal */
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
  }

  /* Container */
  .memeview-container {
    margin: 10% auto;
    width: 80%;
    max-width: 700px;
    text-align: center;
    position: relative;
  }

  /* Close Button */
  .stop {
    position: absolute;
    top: 0;
    right: 0;
    color: white;
    font-size: 35px;
    font-weight: bold;
    cursor: pointer;
    padding: 10px;
  }

  .stop:hover,
  .stop:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
  }
</style>

<!-- Button trigger modal -->


<!-- Modal -->

<div style="background-color:#212529;" class="modal" id="modelalert" tabindex="-1" role="dialog">
  <div style="background-color:#212529;" class="modal-dialog" role="document">
    <div style="background-color:#212529;" class="modal-content">
      <div class="modal-header">

        <h1 id="alertcontent" style="color:#4dbf00" class="modal-title">Modal content</h1>

      </div>


    </div>
  </div>
</div>






<!-- modal  -->





<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand " href="index">
    <h1 class="logoName">Cinephiles</h1>
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item ">
        <a style="color:white;" class="nav-link ml-12 navlink" href="index">Home <span class="sr-only"></span></a>
      </li>

      <li class="nav-item">
        <a style="color:white;" class="nav-link  navlink" href="movies">Movies</a>
      </li>

      <li class="nav-item">
        <a style="color:white;" class="nav-link navlink" href="meme">MemeContest</a>
      </li>

      <li class="nav-item">
        <a style="color:white;" class="nav-link navlink" href="watchparty">WatchParty</a>
      </li>


    </ul>

    <div class="form-inline my-2 my-lg-0">





      <div class="search-container1">

        <input style="border: 3px solid #4dbf00;" id="searchbar" type="text" placeholder="Search..." onkeyup="showResults(this.value)">
        <button id="searchbtn" onclick="search()" type="submit">Search</button>

        <ul style="border: 2px solid #4dbf00;background-color:#212529;" class="dropdown1" id="search-results1">

        </ul>

      </div>




      <div class="notification-icon">
        <i class="fas fa-bell bell-icon"></i>
        <span id="notcnt" class="count-bar"></span>

      </div>
      <audio id="notificationSound" src="sound/notification.mp3"></audio>


      <div id="imgdiv" style="border: 3px solid #4dbf00;" class="header_img mr-lg-2 mr-md-2 mr-sm-2">

      </div>


      <div class="dropdown">

        <a id="showname" style="color:#fff; cursor: pointer; margin: 0%; padding: 0%;" class="dropbtn " onclick="toggleClock()">name</a>
        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
        <div class="dropdown-content bg-dark" id="dropdown" style="border: 3px solid #4dbf00; background-color:black;">
          <hr>


          <a style="color:#fff;" href="profile"><i style="color:#4dbf00" class="fas fa-user"></i> Profile</a>

          <hr>
          <hr>
          <hr>


          <a style="color:#fff;" href="/"><i style="color:#4dbf00" class="fas fa-sign-out-alt"></i> Logout</a>

        </div>
      </div>
    </div>



  </div>
  </div>
  </div>
</nav>


<div style="background-color:#212529; border: 5px solid #4dbf00;" id="friendlist1">
  <h2 id="friends1title" style="color:#f1f1f1;">Friend requests</h2>
  <ul id="friends1">
    <li>

    </li>

  </ul>

  <h2 id="friends2title" style="color:#f1f1f1;">Friends WatchParty</h2>

  <ul id="friends2">

    <li>

    </li>

  </ul>

  <h2 id="friends3title" style="color:#f1f1f1;">Friends Meme</h2>

  <ul id="friends3">

    <li>

    </li>

  </ul>

  <button id="friendlist1-close-btn">Close</button>
</div>

<script>
  function showResults(query) {
    // TODO: Use an API or data source to get search results based on the query
    let results = ['Result 1', 'Result 2', 'Result 3', 'Result 4'];

    let dropdown = document.getElementById('search-results1');
    dropdown.innerHTML = '';



    if (query.length >= 3) {
      document.getElementById("search-results1").style.display = "block";

      $.ajax({
        type: "GET",
        dataType: "json",
        url: "/searchRealtime" + query,
        success: function(data) {



          data.forEach(function(result) {

            let li = document.createElement('li');
            let level = document.createElement('level');
            level.textContent = result;
            level.style.color = 'white';

            level.onclick = function() {

              addToSearchbar(result);

            }





            li.appendChild(level);
            dropdown.appendChild(li);
          });



        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });


    }

  }

  function addToSearchbar(moviename) {
    document.getElementById("searchbar").value = moviename;
    document.getElementById("search-results1").style.display = "none";


  }
</script>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name ="csrf-token"]').attr("content"),
    },
  });

  function search(searchContent) {

    var searchbar = document.getElementById("searchbar").value;

    $.ajax({

      type: "GET",
      datatype: "json",
      url: "/searchbar" + searchbar,
      success: function(data) {

        window.location.href = "{{'/searchres'}}";

      },
    });



  }

  function nameShow() {

    $.ajax({

      type: "GET",
      datatype: "json",
      url: "/nameShow",
      success: function(data) {
        console.log(data);
        var v = document.getElementById("showname");
        v.innerHTML = data[0];
        var html = '<img  src="images/' + data[1] + '" alt="">';
        var memelist = document.getElementById("imgdiv");
        memelist.innerHTML = html;


        // window.location.href = "{{'/searchres'}}";

      },
    });

  }
  nameShow();
</script>





<!-- realtime search call -->

<script>
  const popup = document.getElementById("friendlist1");
  const popupBtn = document.querySelector('.notification-icon');
  const closeBtn = document.getElementById("friendlist1-close-btn");

  popupBtn.addEventListener("click", () => {

    friendrequest();
    popup.style.display = "block";

  });

  closeBtn.addEventListener("click", () => {
    popup.style.display = "none";
  });


  function confirm(email) {

    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        email: email,
        _token: '{{ csrf_token() }}'
      },
      url: "/confirm",
      success: function(data) {

        console.log("updated");

        friendrequest();



      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });


  }

  function friendrequest() {


    $.ajax({
      type: "GET",
      datatype: "json",
      url: "/friendrequest",
      success: function(data) {
        var prenotcnt = sessionStorage.getItem('prenotcnt');

        var notcnt = 0;


        console.log(data);

        var html = '';


        $.each(data[0], function(key, value) {
          notcnt++;
          html +=
            '<li  >' +
            '<img src="images/' + value.image + '" alt="Profile Picture">' +
            '<span style="color:white"; >' + value.name + '</span>' +
            '<button onclick="confirm(\'' + value.email + '\')"  >Confirm</button>' +
            '</li>';
        });

        var memelist = document.getElementById("friends1");
        memelist.innerHTML = html;

        if (data[0] == '') {
          var memelist1 = document.getElementById("friends1title");
          memelist1.style.display = 'none';
        } else {
          var memelist1 = document.getElementById("friends1title");
          memelist1.style.display = 'block';

        }








        var html = '';

        $.each(data[1], function(key, value) {
          notcnt++;

          html +=
            '<li  >' +
            '<img src="images/' + value.image + '" alt="Profile Picture">' +
            '<span style="color:white"; >' + value.movie_name + '</span>' +
            '<button onclick="Join()"  >Join</button>' +
            '</li>';
        });

        var memelist = document.getElementById("friends2");

        memelist.innerHTML = html;



        if (data[1] == '') {

          var memelist2 = document.getElementById("friends2title");
          memelist2.style.display = 'none';


        } else {
          var memelist2 = document.getElementById("friends2title");
          memelist2.style.display = 'block';

        }


        var html = '';
        var flag=0;
        $.each(data[2], function(key, value) {
          if (value != "") {
            flag++;
            notcnt++;
            console.log("askhask   " + value);



            html +=
              '<li  >' +
              '<img src="images/' + value + '" alt="Profile Picture" ' +
              '<button onclick="viewmeme(\'' + value + '\')"  > viewmeme</button>' +

              '<button onclick="removememe(\'' + value + '\')"  > Remove</button>' +
              '</li>';
          }
        });



        var memelist = document.getElementById("friends3");

        memelist.innerHTML = html;



        if (flag == 0) {

          var memelist2 = document.getElementById("friends3title");
          memelist2.style.display = 'none';


        } else {
          var memelist2 = document.getElementById("friends3title");
          memelist2.style.display = 'block';

        }






        if (notcnt > prenotcnt) {

          console.log("new notification");
          playNotificationSound();

        }


        sessionStorage.setItem('prenotcnt', notcnt);

        const notcnt1 = document.getElementById('notcnt');

        notcnt1.innerHTML = notcnt;





      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }


    });

  }

  setInterval(friendrequest, 1000);

  function removememe(img) {

    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        img: img,
        _token: '{{ csrf_token() }}'
      },
      url: "/removememe",
      success: function(data) {

        console.log("removememe");




      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });



  }




  // Function to play the notification sound
  function playNotificationSound() {
    const audioElement = document.getElementById("notificationSound");
    audioElement.play();
  }
</script>


<script>
  function showModalForSeconds(msg) {

    document.getElementById("alertcontent").innerHTML = '<i class="fas fa-heart">' + msg + '</i>';

    $("#modelalert").modal("show");
    setTimeout(function() {
      $("#modelalert").modal("hide");
    }, 5000);

  }


  function Join() {

    window.location.href = "{{'/watchparty'}}";

  }
</script>


<!-- movie details popup -->

<div style="background-color:#212529; border: 5px solid #4dbf00;" id="moviedetails">



  <button id="moviedetails-close-btn">

    X
  </button>

  <br>


  <div id="moviesinfo">

    <h2 style="color:white;"></h2>
    <h3 style="color:white;"></h3>
    <h3 style="color:white;"></h3>
    <p style="color:white;"></p>

  </div>

  <div style="font-size: 24px;" id="playv">

  </div>





  <div>

    <div style="font-size: 24px;" id="watchlistdiv">
      <i color: #4dbf00;" class="fa fa-plus">Watch list</i>
      <br>
    </div>

    <div style="font-size: 24px;" id="Favoritesdiv">
      <i class="fa fa-plus" style="color:#4dbf00;">Favorites</i>
      <br>
    </div>



    <div style="font-size: 24px;" id="Watchpartydiv">
      <i class="fa fa-plus" style="color:#4dbf00;">Watch party</i>
      <br>
    </div>






  </div>



</div>



<script>
  const moviedetails = document.getElementById("moviedetails");
  const Detailsbtn = document.getElementById('Detailsbtn');
  const moviedetailsCloseBtn = document.getElementById("moviedetails-close-btn");



  moviedetailsCloseBtn.addEventListener("click", () => {
    moviedetails.style.display = "none";
  });

  function loadDetails(moviename) {
    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        moviename: moviename,
        _token: '{{ csrf_token() }}'
      },
      url: "/loadDetails",
      success: function(data) {

        console.log("hyo");

        var moviesinfo = document.getElementById("moviesinfo");

        // Update the movie title
        var h2Element = moviesinfo.getElementsByTagName("h2")[0];
        h2Element.innerHTML = data[0].movie_name;

        // Update the year
        var h3Elements = moviesinfo.getElementsByTagName("h3");
        h3Elements[0].innerHTML = data[0].release_year;

        // Update the genre
        h3Elements[1].innerHTML = data[0].genres;

        // Update the descr
        var pElement = moviesinfo.getElementsByTagName("p")[0];
        pElement.innerHTML = data[0].synopsis;

        var html = '';

        html += '<a onclick="playVideo(\'' + data[0].movie_clip + '\',\'' + data[0].movie_name + '\')" >' +

          '<i class="fa fa-play" style="color:#4dbf00;"> play' +
          '</i> ' +
          '</a>';



        var playv = document.getElementById("playv");
        playv.innerHTML = html;


        html = '';

        if (data[1] == 1) {
          html += '<a>' +

            '<i class="fas fa-check" style="color:yellow;"> Watchlist' +
            '</i> ' +
            '</a>';
        } else {

          html += '<a onclick="addWatchlist(\'' + data[0].movie_name + '\')" >' +

            '<i class="fa fa-plus" style="color:#4dbf00;"> Watchlist' +
            '</i> ' +
            '</a>';

        }






        var watchlistdiv = document.getElementById("watchlistdiv");
        watchlistdiv.innerHTML = html;

        html = '';

        if (data[2] == 1) {


          html += '<a >' +

            '<i class="fas fa-check" style="color:yellow;"> Favorites' +
            '</i> ' +
            '</a>';


        } else {
          html += '<a onclick="addFavorites(\'' + data[0].movie_name + '\')" >' +

            '<i class="fa fa-star" style="color:#4dbf00;"> Favorites' +
            '</i> ' +
            '</a>';

        }





        var Favoritesdiv = document.getElementById("Favoritesdiv");
        Favoritesdiv.innerHTML = html;


        html = '';


        html += '<a onclick="addWatchparty(\'' + data[0].movie_name + '\')" >' +

          '<i class="fas fa-tv" style="color:#4dbf00;"> Watchparty' +
          '</i> ' +
          '</a>';



        var Watchpartydiv = document.getElementById("Watchpartydiv");
        Watchpartydiv.innerHTML = html;




      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }

  function addWatchlist(moviename) {

    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        moviename: moviename,
        _token: '{{ csrf_token() }}'
      },
      url: "/addWatchlist",
      success: function(data) {

        console.log("addWatchlist");

        // showModalForSeconds('You just added ' + moviename + ' to your cinephiles watchlist');

        loadDetails(moviename);


      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });


  }

  function addFavorites(moviename) {
    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        moviename: moviename,
        _token: '{{ csrf_token() }}'
      },
      url: "/addFavorites",
      success: function(data) {
        // showModalForSeconds('You just added ' + moviename + ' to your cinephiles favorites');

        console.log("addFavorites");
        loadDetails(moviename);



      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });


  }

  function addWatchparty(moviename) {
    console.log("addWatchparty");

    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        moviename: moviename,
        _token: '{{ csrf_token() }}'
      },
      url: "/addWatchparty",
      success: function(data) {

        console.log("addWatchparty");

        window.location.href = "{{'/watchparty'}}";



      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });



  }


  function show(moviename) {

    loadDetails(moviename);

    moviedetails.style.display = "block";
    console.log(moviename);


  }


  function playVideo(x, y) {
    sessionStorage.setItem('streamingMoviename', y);

    window.location.href = "{{ route('streaming') }}?video=" + x;


  }


  function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
</script>