<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- fontawesome cdn link  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- custom css local link  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <!-- custom js file  -->
    <!-- <script src="{{asset('frontend/js/main.js') }}"></script> -->
    <style>
        #time-div,
        #movie-div {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 40px auto;
            margin-top: 200px;
            width: 80%;
            border: 1px solid black;
            padding: 10px;
            background-color: #343a40;
        }

        #time-div label,
        #movie-div label {
            margin-right: 10px;
            color: white;

        }

        #time-div input,
        #movie-div input,
        #movie-div textarea {
            margin-bottom: 10px;
            padding: 5px;
            font-size: 16px;
        }

        #set-button {
            background-color: #4dbf00;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #movie-div label[for="synopsis-input"] {
            align-self: flex-start;
            color: white;
        }

        #movie-div label[for="genres-input"] {
            align-self: flex-start;
            color: white;

        }

        #movie-div textarea {
            height: 100px;
        }

        #movie-div input[type="text"],
        #movie-div textarea {
            width: 100%;
        }
    </style>

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
            /* font-size: 20px;
    margin-right: 10px;
    cursor: pointer;  */
        }

        .notification-icon {
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
            /* font-size: 20px;
    margin-right: 10px;
    cursor: pointer;  */
        }

        .notification-icon {
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
</head>

<body>



    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="adminpage">
                <h1 class="logoName">Cinephiles</h1>
            </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               

                </ul>

                <div class="dropdown">

                    <a style="color:#fff; cursor: pointer; margin: 0%; padding: 0%;" class="dropbtn " onclick="toggleClock()">Admin</a>
                    <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
                    <div class="dropdown-content bg-dark" id="dropdown" style="background-color:black">


                        <hr>
                        <a style="color:#fff;" href="/">Logout</a>


                    </div>
                </div>




            </div>
    </div>
    </div>


    </nav>




    </div>







    <div style="border:solid 3px #4dbf00;" id="time-div">
        <h1 style="color:aliceblue">Set Contest</h1>
        <label for="hour-input">
            <h4>Hour:</h4>
        </label>
        <input style="border:solid 5px #4dbf00;" type="number" id="hour-input" min="0" max="23" value="0">
        <label for="min-input">
            <h4>Min:</h4>
        </label>
        <input style="border:solid 5px #4dbf00;" type="number" id="min-input" min="0" max="59" value="0">
        <label for="sec-input">
            <h4>Sec:</h4>
        </label>
        <input style="border:solid 5px #4dbf00;" type="number" id="sec-input" min="0" max="59" value="0">
        <button id="set-button" style="padding:20px; font-size:larger; size:0in; border:solid 5px #4dbf00;">Set</button>
    </div>

    <div style="border:solid 3px #4dbf00;" id="movie-div">
        <h1 style="color:aliceblue">Add Movie</h1>
        <hr>

        <label for="name-input">
            <h4>Name:</h4>
        </label>
        <input style="border:solid 5px #4dbf00;" type="text" id="name-input">
        <label for="year-input">
            <h4>Release Year:</h4>
        </label>
        <input style="border:solid 5px #4dbf00;" type="number" id="year-input" min="1900" max="2099">
        <label for="synopsis-input">
            <h4> Synopsis:</h4>
        </label>
        <textarea style="border:solid 5px #4dbf00;" id="synopsis-input"></textarea>
        <label for="image-input">
            <h4>Image:</h4>
        </label>
        <input style="border:solid 5px #4dbf00;" type="text" id="image-input">
        <label for="genres-input">
            <h4>Genres:</h4>
        </label>
        <input style="border:solid 5px #4dbf00;" type="text" id="genres-input">
    </div>










    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <div style="background-color:#212529;" class="modal" id="modelalert" tabindex="-1" role="dialog">
        <div style="background-color:#212529;" class="modal-dialog" role="document">
            <div style="background-color:#212529;" class="modal-content">
                <div class="modal-header">

                    <h1 id="alertcontent" style="color:#4dbf00" class="modal-title">Modal content</h1>

                </div>


            </div>
        </div>
    </div>


    <script>
        function showModalForSeconds(msg) {

            document.getElementById("alertcontent").innerHTML = '<i class="fas fa-heart">' + msg + '</i>';

            $("#modelalert").modal("show");
            setTimeout(function() {
                $("#modelalert").modal("hide");
            }, 5000);

        }
    </script>





    <script>
        const hourInput = document.getElementById("hour-input");
        const minInput = document.getElementById("min-input");
        const secInput = document.getElementById("sec-input");
        const setButton = document.getElementById("set-button");

        setButton.addEventListener("click", () => {
            const hour = hourInput.value;
            const min = minInput.value;
            const sec = secInput.value;

            console.log(`Time: ${hour}:${min}:${sec}`);
            $.ajax({
                type: "POST",
                dataType: "json",
                data: {
                    hour: hour,
                    min: min,
                    sec: sec,
                    _token: '{{ csrf_token() }}'
                },
                url: "/setContest",
                success: function(data) {
                    hourInput.value = "";
                    minInput.value = "";
                    secInput.value = "";


                    showModalForSeconds("Your Contest is Set")
                    console.log("set");
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });


        const nameInput = document.getElementById("name-input");
        const yearInput = document.getElementById("year-input");
        const synopsisInput = document.getElementById("synopsis-input");
        const imageInput = document.getElementById("image-input");
        const genresInput = document.getElementById("genres-input");

        const movieData = {
            name: "",
            year: "",
            synopsis: "",
            image: "",
            genres: "",
        };

        nameInput.addEventListener("change", () => {
            movieData.name = nameInput.value;
        });

        yearInput.addEventListener("change", () => {
            movieData.year = yearInput.value;
        });

        synopsisInput.addEventListener("change", () => {
            movieData.synopsis
        });

        imageInput.addEventListener("change", () => {
            movieData.image = imageInput.value;
        });

        genresInput.addEventListener("change", () => {
            movieData.genres = genresInput.value;
        });

        const saveButton = document.createElement("button");
        saveButton.textContent = "Add";
        saveButton.style.backgroundColor = "#4dbf00";
        saveButton.style.padding = "20px";


        saveButton.addEventListener("click", () => {

            console.log("Movie Data:");
            console.log(movieData);

            $.ajax({
                type: "POST",
                dataType: "json",
                data: {
                    moviename: movieData.name,
                    genres: movieData.genres,
                    synopsis: movieData.synopsis,
                    year: movieData.year,

                    _token: '{{ csrf_token() }}'
                },
                url: "/moviestore",
                success: function(data) {


                    showModalForSeconds("Movie Added");

                    nameInput.value = "";
                    yearInput.value = "";
                    synopsisInput.value = "";
                    imageInput.value = "";
                    genresInput.value = "";

                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });

        const movieDiv = document.getElementById("movie-div");
        movieDiv.appendChild(saveButton);
    </script>




</body>

</html>