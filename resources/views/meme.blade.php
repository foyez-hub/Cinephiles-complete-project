@extends('frontend')

@section('meme')


<style>
  #friendlistmeme {
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

  #friendlistmeme {
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

  #friendlistmeme h2 {
    margin-top: 0;
  }

  #friendlistmeme ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  #friendlistmeme li {
    display: flex;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
  }

  #friendlistmeme img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
  }

  #friendlistmeme button {
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

  #friendlistmeme button:hover {
    background-color: #f33;
  }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{ asset('frontend/css/meme.css') }}">


<div style=" margin-left: 80px; margin-top:20px; margin-right: 100px; overflow: hidden;
 width: 300px;
 height: 550px;
 float: left;
 background-color:#212529;">


  <div style="margin-left: 70px;width: 150px; height: 150px;">

    <h2 style="color:white; text-align:center">Winner</h2>
    <img id="winnerimg" src="images/batman.jpg" style="border: 5px solid #4dbf00; max-width: 100%; height: auto; display: block; margin: auto;">
    <label id="winnername" style="color:white; text-align:center"> Foyez</label>

    <h2 id="hide1" style="color:white; text-align:center">Top Meme</h2>

    <img id="topmemeimg" src="images/batman.jpg" style="border: 5px solid #4dbf00;max-width: 100%; height: auto; display: block; margin: auto;">

  </div>

</div>

<div style="margin-left:50px; margin-top:20px; margin-right: 300px; overflow: hidden;
 width: 130px;
 height: 600px;
 float: left;">

  <div style="font-weight: bold;font-size: 20px; border: 5px solid #4dbf00 ;color:#212529;" class="Timer" id="current-time"></div>

  <div style="font-weight: bold;font-size: 20px; border: 5px solid #4dbf00 ;color:#212529; background-color: white;" class="countdown" id="timer">
  </div>
</div>



<div style="margin-left: 700px;margin-top: 200px; margin-right: 100px;">




  <div style="border: 5px solid #4dbf00 ;color:#212529;" id="uploadememe" class="memebox">

    <label style="color:white" class="h2-style" for="meme">Choose a meme to upload:</label>
    <input style="color:white" type="file" id="memeimg" name="image">
    <br>
    <label style="color:white" class="h2-style" for="title">Meme title:</label>
    <input type="text" id="memetitle" name="title">
    <br>

    <button id="subbtn" onclick="addData()" type="submit">Upload Meme</button>

  </div>


  <div id="hidetitle">
    <hr class="hr-style">
    <h2 style='text-align:left;color:#fff;' class="h2-style" id="ti">Recent Memes</h2>
  </div>
  <ul class="ul-style" id="meme-list">



  </ul>

</div>

<!-- friend lsit -->

<div style="background-color:#212529; border: 5px solid #4dbf00;" id="friendlistmeme">
  <h2 style="text-align:center; color:white;"> My Friends</h2>
  <hr style="background-color:white;">
  <ul id="friendsmeme">
    <li>
      <h1>HEllo</h1>

    </li>

  </ul>
  <br>

  <button style="float:right;" id="friendlistmeme-close-btn">Close</button>
</div>

<!-- friend lsit end -->

<script>
  function allData() {

    $.ajax({
      type: "GET",
      datatype: "json",
      url: "/allData",
      success: function(data) {

        html = "";
        i = 0;
        $.each(data[0], function(key, value) {
          ck = "<i class='fa fa-thumbs-up'></i>";

          $.ajax({
            type: "GET",
            datatype: "json",
            url: "/ckvote" + value.Time,
            async: false,
            success: function(data) {
              ck = data.status;

            },
          });
          console.log(data);

          html += "<li class='li-style'>";
          html +=
            '<img src="images/' + value.PostImg + '" alt="Meme Title">';
          html += "<h3 style='color:#4dbf00;' >" + value.memetitle + "</h3>";
          html += "<h5 style='color:#fff;'>" + data[1][i] + " | " + value.Time + "</h5>";

          html +=
            '<button id="' +
            value.Time +
            '" onclick="editdata(\'' +
            value.Time +
            "')\">" +
            ck +
            "</button>";


          html += "<span style='color:#fff;' >" + value.PostLike + '   ' + "</span>";
          html +=
            '<button onclick="sharememe(\'' +
            value.PostImg +
            "')\">" + '<i class="fas fa-share"> share</i>' +
            "</button>";
          html += "</li>";
          i++;
        });

        var memelist = document.getElementById("meme-list");
        memelist.innerHTML = html;

        const img1 = document.getElementById('winnerimg');
        img1.setAttribute('src', 'images/' + data[2].memeimg);
        document.getElementById("winnername").innerHTML = data[2].name;

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });

  }

  allData();

  // memeimg and memetitle are adding here

  function addData() {


    var memeimg = document.getElementById("memeimg").value;
    var memetitle = document.getElementById("memetitle").value;

    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        memetitle: memetitle,
        memeimg: memeimg,
        _token: '{{ csrf_token() }}'
      },
      url: "/memestore",
      success: function(data) {
        allData();

        topmeme();
        const hide11 = document.getElementById("hide1");
        hide11.style.display = "block";
        const hide22 = document.getElementById("topmemeimg");
        hide22.style.display = "block";

        clearData();
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });

  }

  // clearing data from the filed

  function clearData() {

    document.getElementById("memeimg").value = "";
    document.getElementById("memetitle").value = "";

  }

  //when the upvote button clicked

  function editdata(time) {
    $.ajax({
      type: "GET",
      datatype: "json",
      url: "/vote" + time,
      success: function(data) {

        console.log("button clicked");

        topmeme();
      },
    });
  }


  function sharememe(imagememe) {

    const popup1 = document.getElementById("friendlistmeme");
    const closeBtn1 = document.getElementById("friendlistmeme-close-btn");




    popup1.style.display = "block";
    sessionStorage.setItem('memeimg', imagememe);

    loadmemefriendlist();

    closeBtn1.addEventListener("click", () => {
      popup1.style.display = "none";
    });


  }


  function loadmemefriendlist() {



    $.ajax({

      type: "GET",
      datatype: "json",
      url: "/firendlist",
      success: function(data) {
        console.log(data);
        var img=sessionStorage.getItem('memeimg');



        var html = '';

        $.each(data, function(key, value) {
          html +=
            '<li>' +
            '<img  style=" border: 2px solid #4dbf00;" src="images/' + value.image + '" alt="Profile Picture">' +
            '<span  style=" color:white;" >' + value.name + '       ' + '</span>' +

            '<button style="border: 5px solid #212529;" onclick="sharethismeme(\'' + value.email + '\',\'' + img + '\')">Share</button>' +
            '</li>';
        });

        var memelist = document.getElementById("friendsmeme");
        memelist.innerHTML = html;





        // document.getElementById("nofriends").textContent = "You Have No Friends";





      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }

    });

  }

  function sharethismeme(email, imagememe) {

    console.log(email+' '+imagememe);

    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        email: email,
        imagememe: imagememe,
        _token: '{{ csrf_token() }}'
      },
      url: "/sharethismeme",
      success: function(data) {

        // showModalForSeconds('Your meme is added');
        alert("Meme  is Shared");

        console.log("sharememe");
        

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });



  }


  //timer

  function updateCurrentTime() {
    const currentTimeElement = document.getElementById("current-time");

    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();



    const timeText =
      ("0" + hours).slice(-2) +
      ":" +
      ("0" + minutes).slice(-2) +
      ":" +
      ("0" + seconds).slice(-2);
    currentTimeElement.innerHTML = "Current Time <br>" + timeText;
  }


  setInterval(function() {

    updateCurrentTime();

    $.ajax({
      type: "GET",
      datatype: "json",
      url: "/gettime",
      success: function(data) {

        const now = new Date();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const seconds = now.getSeconds();
        const tot = (minutes * 60) + seconds;

        const tot1 = (data[0].m * 60) + data[0].s;
        const dif = tot - tot1;
        const currentTimeElement = document.getElementById("timer");
        const newmin = Math.floor(dif / 60);
        const newsec = dif % 60;
        console.log(dif);

        console.log(newmin + ' ' + newsec + ' ' + hours);

        if (dif <= 120 && dif >= 0) {

          const h11 = document.getElementById("hidetitle");
          h11.style.display = "block";

          const h22 = document.getElementById("uploadememe");
          h22.style.display = "block";



          console.log("contest running");

          allData();

          const timeText =
            ("0" + 0).slice(-2) +
            ":" +
            ("0" + newmin).slice(-2) +
            ":" +
            ("0" + newsec).slice(-2);
          currentTimeElement.innerHTML = "Contest is running<br>" + timeText;



        } else if (dif < 0) {


          const hide1 = document.getElementById("hide1");
          hide1.style.display = "none";
          const hide2 = document.getElementById("topmemeimg");
          hide2.style.display = "none";

          const hide4 = document.getElementById("hidetitle");
          hide4.style.display = "none";

          const hide3 = document.getElementById("uploadememe");
          hide3.style.display = "none";


          const newdif = dif * (-1);
          const newmin1 = Math.floor(newdif / 60);
          const newsec1 = newdif % 60;
          console.log('contest will start');


          const timeText =
            ("0" + 0).slice(-2) +
            ":" +
            ("0" + newmin1).slice(-2) +
            ":" +
            ("0" + newsec1).slice(-2);
          currentTimeElement.innerHTML = "Before the  contest <br>" + timeText;


        } else {

          currentTimeElement.innerHTML = "Contest End! <br>";

          const hide1 = document.getElementById("hide1");
          hide1.style.display = "none";
          const hide2 = document.getElementById("topmemeimg");
          hide2.style.display = "none";

          const hide4 = document.getElementById("hidetitle");
          hide4.style.display = "none";

          const hide3 = document.getElementById("uploadememe");
          hide3.style.display = "none";


          $.ajax({
            type: "GET",
            datatype: "json",
            url: "/Endcontest",
            success: function(data) {
              console.log("contest END");
              allData();

            },
            error: function(xhr, status, error) {
              console.log(xhr.responseText);
            }
          });





        }

      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });


  }, 1000);



  function topmeme() {

    $.ajax({
      type: "GET",
      datatype: "json",
      url: "/topmeme",
      success: function(data) {

        const hide11 = document.getElementById("hide1");
        hide11.style.display = "block";
        const hide22 = document.getElementById("topmemeimg");
        hide22.style.display = "block";



        console.log("topmeme");



        console.log(data);
        const img = document.getElementById('topmemeimg');
        img.setAttribute('src', 'images/' + data.PostImg);
        allData();




      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });


  }

  topmeme();
</script>




@endsection