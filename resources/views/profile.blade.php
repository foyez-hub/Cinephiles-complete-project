@extends('frontend')




@section('profile')


<style>
    .card-img-top {
        height: 300px;
    }

    .card-no-border .card {
        border-color: #d7dfe3;
        border-radius: 4px;
        margin-bottom: 30px;
        -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .pro-img {
        margin-top: -80px;
        margin-bottom: 20px
    }

    .little-profile .pro-img img {
        width: 128px;
        height: 128px;
        -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 100%
    }

    html body .m-b-0 {
        margin-bottom: 0px
    }

    h3 {
        line-height: 30px;
        font-size: 21px
    }

    .btn-rounded.btn-md {
        padding: 12px 35px;
        font-size: 16px
    }

    html body .m-t-10 {
        margin-top: 10px
    }

    .btn-primary,
    .btn-primary.disabled {
        background: #7460ee;
        border: 1px solid #7460ee;
        -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
        box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
        -webkit-transition: 0.2s ease-in;
        -o-transition: 0.2s ease-in;
        transition: 0.2s ease-in
    }



    .m-t-20 {
        margin-top: 20px
    }

    .text-center {
        text-align: center !important
    }



    h3 {
        color: #455a64;
        font-family: "Poppins", sans-serif;
        font-weight: 400;
    }


    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    /* 
#privacyHeader{
  margin-left:28vw;
} */

    .dropdown,
    .movieScroolHeader {
        display: inline-block;

    }

    .dropdown {
        margin-top: 1%;
    }

    #dropdown2,
    #dropdown3,
    #dropdown4 {
        z-index: 1000;
    }

    .background-hidden {
        display: none;
    }
</style>
<style>
    /* Style for the button */
    #edit-profile-button {
        background-color: #4dbf00;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .mybutton {

        background-color: #4dbf00;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;

    }

    /* Style for the modeleditprofile container */
    .modeleditprofile {
        display: none;
        position: fixed;
        z-index: 9999;
        /* <-- Change this value */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(52, 58, 64, 0.8);
    }



    /* Style for the modeleditprofile content */
    .modeleditprofile-content {

        background-color: #343a40;
        margin: 15% auto;
        padding: 20px;
        border: none;
        border-radius: 5px;
        width: 50%;

    }

    /* Style for the close button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        text-decoration: none;
        cursor: pointer;
    }

    label[for="name"] {
        font-weight: bold;
        margin-right: 10px;
        display: inline-block;
        width: 60px;
    }

    .popbutton {
        background-color: #4dbf00;
        color: white;
        margin-top: auto;
        padding: 4px 4px;
        border: none;
        border-radius: 1px;
        cursor: pointer;
    }

    .popbutton:hover {
        background-color: #3d8b00;
    }
</style>

<style>
    #friendlist {
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

    #friendlist {
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

    #friendlist h2 {
        margin-top: 0;
    }

    #friendlist ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #friendlist li {
        display: flex;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #ccc;
    }

    #friendlist img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    #friendlist button {
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

    #friendlist button:hover {
        background-color: #f33;
    }
</style>


<div>
    <div class="container-fluid">
        <div style="border: 5px solid #4dbf00;" class="card">
            <img style="background-color:#212529;" class="card-img-top" src="" alt="Card image cap">
            <div style="background-color:#212529;" class="card-body little-profile text-center">
                <div class="pro-img"><img style="border: 5px solid #4dbf00;" id="user-img" src="" alt="user"></div>
                <h3 style="color:white;" id="h3name" class="m-b-0"></h3>

                <p style="color:white;" id="bio"></p>
                <button id="edit-profile-button"> <i class="fas fa-edit"></i></button>
                <button id="popup-btn"><i class="fas fa-user-friends"></i> Friends</button>

                <!-- <a href="#" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Add Friend</a> -->
            </div>
        </div>
    </div>
</div>


<!-- The modeleditprofile -->

<div style="color:#455a64;background-color:black;"  id="edit-profile-modeleditprofile" class="modeleditprofile">

    <div style="border: 5px solid #4dbf00;" class="modeleditprofile-content">

        <span class="close">&times;</span>
        <h2 style="color: white; text-align: center;">Edit Profile</h2>

        <label class="mr-5" style="color: #4dbf00 ;" for="name">Name</label>
        <input type="text" id="name" name="name">
        <br>
        <label class="mr-1" style="color: #4dbf00 ;" for="meme">Profile Picture</label>
        <input type="file" id="Memeimg" name="image">
        <br>
        <label class="mt-5" style="color: #4dbf00 ; margin:40px" for="bio">Bio:</label>
        <textarea id="biopopup" name="bio"></textarea>
        <br>
        <input style=" margin:60px" onclick="profileEdit()" class="mybutton" type="submit" value="Save Changes">

    </div>

</div>

<!--friend list pop up new -->

<div style="background-color:#212529; border: 5px solid #4dbf00;" id="friendlist">
    <h2 id="nofriends" style="text-align:center; color:white;"> My Friends</h2>
    <hr style="background-color:white;" >
    <ul id="friends">
        <li>
         
        </li>

    </ul>
    <br>

    <button style="float:right;" id="friendlist-close-btn">Close</button>
</div>




<div id="privacyHeader" class=" row justify-content-center">

    <div class="dropdown">
        <a style="cursor: pointer; margin: 1%; padding: 0%;" class="dropbtn " onclick="toggleClock2(2)"> <i style="color:#4dbf00" class='fas fa-user-lock'></i> Privacy</a>
        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
        <div style="border: 3px solid #4dbf00;" class="dropdown-content bg-dark" id="dropdown2" style="background-color:black">

            <button style="border: 3px solid black;" id="public-button" class="popbutton" onclick="setPrivacy('Watchlistp','p')"><i class="fas fa-globe"></i> Public</button>
            <hr>
            <button style="border: 3px solid black;" id="friends-button" class="popbutton" onclick="setPrivacy('Watchlistp','f')"><i class="fas fa-user-friends"></i> Friends</button>
            <hr>
            <button style="border: 3px solid black;" id="only-me-button" class="popbutton" onclick="setPrivacy('Watchlistp','o')"><i class="fas fa-lock"></i> Only Me</button>


        </div>
    </div>
    <h1 style="color:white;" class="outer-inner-text" class="movieScroolHeader mt-2">Watchlist</h1>
</div>


<div id="carousel" class="container">






</div>



<div id="privacyHeader" class=" row justify-content-center">

    <div class="dropdown">
        <a style="cursor: pointer; margin: 1%; padding: 0%;" class="dropbtn " onclick="toggleClock2(3)"> <i style="color:#4dbf00" class='fas fa-user-lock'></i>Privacy</a>
        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
        <div style="border: 3px solid #4dbf00;" class="dropdown-content bg-dark" id="dropdown3" style="background-color:black">
            <button style="border: 3px solid black;" id="public-button1" class="popbutton" onclick="setPrivacy('favoritesp','p')"><i class="fas fa-globe"></i> Public</button>
            <hr>
            <button style="border: 3px solid black;" id="friends-button1" class="popbutton" onclick="setPrivacy('favoritesp','f')"><i class="fas fa-user-friends"></i> Friends</button>
            <hr>
            <button style="border: 3px solid black;" id="only-me-button1" class="popbutton" onclick="setPrivacy('favoritesp','o')"><i class="fas fa-lock"></i> Only Me</button>
        </div>
    </div>
    <h1 style="color:white;" class="outer-inner-text" class="movieScroolHeader mt-2">Favorites</h1>
</div>


<div id="carousel1" class="container">



</div>




<div id="privacyHeader" class=" row justify-content-center">

    <div class="dropdown">
        <a style="cursor: pointer; margin: 1%; padding: 0%;" class="dropbtn " onclick="toggleClock2(4)"> <i style="color:#4dbf00" class='fas fa-user-lock'></i> Privacy</a>
        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
        <div style="border: 3px solid #4dbf00;" class="dropdown-content bg-dark" id="dropdown4" style="background-color:black">

            <button style="border: 3px solid black;" id="public-button2" class="popbutton" onclick="setPrivacy('recentlyp','p')"><i class="fas fa-globe"></i> Public</button>
            <hr>
            <button style="border: 3px solid black;" id="friends-button2" class="popbutton" onclick="setPrivacy('recentlyp','f')"><i class="fas fa-user-friends"></i> Friends</button>
            <hr>
            <button style="border: 3px solid black;" id="only-me-button2" class="popbutton" onclick="setPrivacy('recentlyp','o')"><i class="fas fa-lock"></i> Only Me</button>

        </div>
    </div>
    <h1 style="color:white;" class="outer-inner-text" class="movieScroolHeader mt-2">Recently Watch</h1>
</div>

<div id="carousel2" class="container">
    <div class="control-container">
        <div id="left-scroll-button" class="left-scroll button scroll">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div id="right-scroll-button" class="right-scroll button scroll">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
    </div>


</div>





<script>
    function profileAllData() {
        $.ajax({
            type: "GET",
            datatype: "json",
            url: "/profileAllData",
            success: function(data) {
                console.log("profile");
                var userinfo = data[0];
                var img = document.getElementById("user-img");
                img.src = "images/" + userinfo.image;
                var name = document.getElementById("h3name");
                name.innerHTML = '<i style="color:#4dbf00" class="fas fa-user"></i> ' + userinfo.name;
                var bio = document.getElementById("bio");
                bio.innerHTML = '<h6 style="color:#4dbf00" ># ' + userinfo.bio;
                '</h6> '






                html = '';
                if (data[1] != '') {


                    $.each(data[1], function(key, value) {
                        html +=
                            '<div  style="border: 3px solid #4dbf00;" class="items" id="carousel-items">' +
                            '<div class="item">' +
                            '<img  style="border: 3px solid #4dbf00;" class="item-image" src="images/' + value.image + '" />' +
                            '<span class="item-title">' + value.movie_name + '</span>' +

                            '<div  class="item-description opacity-none row justify-content-center"><button style="border: 3px solid #4dbf00;"  onclick="show(\'' + value.movie_name + '\')" class="cross-button mr-2"><i style="color:#4dbf00;" class="fa fa-info-circle"></i></button><button style="border: 3px solid #4dbf00;"  class="add-button" onclick="remove(\'' + value.movie_name + '\', \'watchlist\')"><i style="color:#4dbf00;" class="fas fa-minus"></i></button></div>' +
                            "</div>" +
                            "</div>";
                    });


                    var memelist = document.getElementById("carousel");
                    memelist.innerHTML = html;

                } else {
                    var memelist = document.getElementById("carousel");
                    memelist.style.display = 'none';

                }



                html = "";
                if (data[3] != '') {


                    $.each(data[3], function(key, value) {
                        html +=
                            '<div  style="border: 3px solid #4dbf00;" class="items" id="carousel-items">' +
                            '<div class="item">' +
                            '<img  style="border: 3px solid #4dbf00;" class="item-image" src="images/' + value.image + '" />' +
                            '<span class="item-title">' + value.movie_name + '</span>' +

                            '<div class="item-description opacity-none row justify-content-center"><button style="color:#4dbf00;border: 3px solid #4dbf00;" onclick="show(\'' + value.movie_name + '\')" class="cross-button mr-2"><i class="fa fa-info-circle"></i></button><button style="color:#4dbf00;border: 3px solid #4dbf00; class="add-button" onclick="remove(\'' + value.movie_name + '\', \'favorites\')"><i class="fas fa-minus"></i></button></div>' +
                            "</div>" +
                            "</div>";
                    });

                    var memelist = document.getElementById("carousel1");
                    memelist.innerHTML = html;
                } else {

                    var memelist = document.getElementById("carousel1");
                    memelist.style.display = 'none';

                }

                html = "";
                if (data[2] != '') {


                    $.each(data[2], function(key, value) {
                        html +=
                            '<div style="border: 3px solid #4dbf00;" class="items" id="carousel-items">' +
                            '<div class="item">' +
                            '<img style="border: 3px solid #4dbf00;" class="item-image" src="images/' + value.image + '" />' +
                            '<span  class="item-title">' + value.movie_name + '</span>' +
                            '<div  class="item-description opacity-none row justify-content-center"><button style="color:#4dbf00;border: 3px solid #4dbf00; onclick="show(\'' + value.movie_name + '\')" class="cross-button mr-2"><i class="fa fa-info-circle"></i></button><button style="color:#4dbf00;border: 3px solid #4dbf00; class="add-button" onclick="remove(\'' + value.movie_name + '\', \'recent\')"><i class="fas fa-minus"></i></button></div>' +
                            "</div>" +
                            "</div>";
                    });

                    var memelist = document.getElementById("carousel2");
                    memelist.innerHTML = html;
                } else {
                    var memelist = document.getElementById("carousel2");
                    memelist.style.display = 'none';

                }



            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            },
        });
    }

    profileAllData();



    function setPrivacy(colName, privacytype, num) {

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                colName: colName,
                privacytype: privacytype,
                _token: '{{ csrf_token() }}'
            },
            url: "/setPrivacy",
            success: function(data) {

                // console.log(data);
                addcolor();
                toggleClock2(num);

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });


    }



    function remove(movieName, colname) {

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                movieName: movieName,
                colname: colname,
                _token: '{{ csrf_token() }}'
            },
            url: "/remove",
            success: function(data) {

                profileAllData();

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });


    }




    function profileEdit() {

        var name = document.getElementById("name").value;
        var img = document.getElementById("Memeimg").value;
        var bio = document.getElementById("biopopup").value;

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                name: name,
                img: img,
                bio: bio,
                _token: '{{ csrf_token() }}'
            },
            url: "/editprofile",
            success: function(data) {


                var modeleditprofile = document.getElementById("edit-profile-modeleditprofile");
                modeleditprofile.style.display = "none";
                profileAllData();
                nameShow();


            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });



    }
</script>







<script>
    // Get the modeleditprofile element
    var modeleditprofile = document.getElementById("edit-profile-modeleditprofile");

    // Get the button that opens the modeleditprofile
    var button = document.getElementById("edit-profile-button");

    // Get the <span> element that closes the modeleditprofile
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modeleditprofile
    button.onclick = function() {

        modeleditprofile.style.display = "block";



        $.ajax({
            type: "GET",
            datatype: "json",
            url: "/profilEdit",
            success: function(data) {
                // console.log(data.bio);
                document.getElementById("name").value = data.name;
                document.getElementById("biopopup").value = data.bio;
                document.getElementById("Memeimg").innerHTML = data.image;


                //   alert(data);

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }

        });




    }

    // When the user clicks on <span> (x), close the modeleditprofile
    span.onclick = function() {
        modeleditprofile.style.display = "none";
    }

    // When the user clicks anywhere outside of the modeleditprofile, close it
    window.onclick = function(event) {
        if (event.target == modeleditprofile) {
            modeleditprofile.style.display = "none";
        }
    }

    // Handle form submission
    var form = document.getElementById("edit-profile-form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        var name = document.getElementById("name").value;
        var bio = document.getElementById("bio").value;

        modeleditprofile.style.display = "none";
    });





    function toggleClock2(num) {

    }
</script>


<!-- show friend list -->

<script>
    const popup1 = document.getElementById("friendlist");
    const popupBtn1 = document.getElementById("popup-btn");
    const closeBtn1 = document.getElementById("friendlist-close-btn");



    popupBtn1.addEventListener("click", () => {

        loadfriendlist();
        popup1.style.display = "block";


    });

    closeBtn1.addEventListener("click", () => {
        popup1.style.display = "none";
    });

    function unfriend(email) {
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                email: email,
                _token: '{{ csrf_token() }}'
            },
            url: "/unfriend",
            success: function(data) {

                console.log("unfriend");

                loadfriendlist();



            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    }

    function loadfriendlist() {


        $.ajax({

            type: "GET",
            datatype: "json",
            url: "/firendlist",
            success: function(data) {
                console.log(data);

              

                var html = '';

                $.each(data, function(key, value) {
                    html +=
                        '<li>' +
                        '<img  style=" border: 2px solid #4dbf00;" src="images/' + value.image + '" alt="Profile Picture">' +
                        '<span  style=" color:white;" >' + value.name +'       '+ '</span>' +
                       
                        '<button style=" border: 5px solid #212529;" onclick="unfriend(\'' + value.email + '\')" >Unfriend</button>' +
                        '</li>';
                });

                var memelist = document.getElementById("friends");
                memelist.innerHTML = html;

            
        

               if(data==''){
                document.getElementById("nofriends").textContent = "You Have No Friends";
               }

            


            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }

        });

    }

</script>

<!-- show add friend list end -->


<!-- add color to privacy -->
<script>
    function addcolor() {

        $.ajax({
            type: "GET",
            datatype: "json",
            url: "/addcolor",
            success: function(data) {

                console.log(data);
                const publicButton = document.getElementById('public-button');
                const friendsButton = document.getElementById('friends-button');
                const onlyMeButton = document.getElementById('only-me-button');


                if (data[0] == 'p') {
                    publicButton.style.backgroundColor = '#006400';
                    friendsButton.style.backgroundColor = '#4dbf00';
                    onlyMeButton.style.backgroundColor = '#4dbf00';
                } else if (data[0] == 'f') {
                    publicButton.style.backgroundColor = '#4dbf00';
                    friendsButton.style.backgroundColor = '#006400';
                    onlyMeButton.style.backgroundColor = '#4dbf00';
                } else {
                    publicButton.style.backgroundColor = '#4dbf00';
                    friendsButton.style.backgroundColor = '#4dbf00';
                    onlyMeButton.style.backgroundColor = '#006400';
                }

                const publicButton1 = document.getElementById('public-button1');
                const friendsButton1 = document.getElementById('friends-button1');
                const onlyMeButton1 = document.getElementById('only-me-button1');


                if (data[1] == 'p') {
                    publicButton1.style.backgroundColor = '#006400';
                    friendsButton1.style.backgroundColor = '#4dbf00';
                    onlyMeButton1.style.backgroundColor = '#4dbf00';
                } else if (data[1] == 'f') {
                    publicButton1.style.backgroundColor = '#4dbf00';
                    friendsButton1.style.backgroundColor = '#006400';
                    onlyMeButton1.style.backgroundColor = '#4dbf00';
                } else {

                    publicButton1.style.backgroundColor = '#4dbf00';
                    friendsButton1.style.backgroundColor = '#4dbf00';
                    onlyMeButton1.style.backgroundColor = '#006400';
                }
                const publicButton2 = document.getElementById('public-button2');
                const friendsButton2 = document.getElementById('friends-button2');
                const onlyMeButton2 = document.getElementById('only-me-button2');


                if (data[2] == 'p') {
                    publicButton2.style.backgroundColor = '#006400';
                    friendsButton2.style.backgroundColor = '#4dbf00';
                    onlyMeButton2.style.backgroundColor = '#4dbf00';
                } else if (data[2] == 'f') {
                    publicButton2.style.backgroundColor = '#4dbf00';
                    friendsButton2.style.backgroundColor = '#006400';
                    onlyMeButton2.style.backgroundColor = '#4dbf00';
                } else {

                    publicButton2.style.backgroundColor = '#4dbf00';
                    friendsButton2.style.backgroundColor = '#4dbf00';
                    onlyMeButton2.style.backgroundColor = '#006400';
                }


            },
            error: function(xhr, textStatus, errorThrown) {
                console.log('Error:', errorThrown);
            }
        });
    }

    addcolor();
</script>

<!-- add color to privacy -->


@endsection