@extends('frontend')





@section('streamingPage')
<style>
  
#videofile {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.mytitle {
  margin-top: 30px;
  text-align: center;
  font-size: 24px;
  color:white;
}

    </style>
    
<!-- old -->

    <!-- <div class="video-container" style="margin-left:10px; margin-top: 150px; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column;">
  <div id="videofile">

    <h2 id="streamingMoviename" class="mytitle">Video Title</h2>

    <video  id="myVideo" controls autoplay style="border: 5px solid #4dbf00; max-width: 80%; max-height: 80vh;">
      <source src="videos/{{$video }}" type="video/mp4">
    </video>

  </div>
</div>  -->

<!-- old end -->

<!-- new video  -->

<div class="video-container" style="margin-left:10px; margin-top: 150px; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column;">
  <div id="videofile">

    <h2 id="streamingMoviename" class="mytitle">Video Title</h2>

    <video   id="myVideo" controls autoplay style="border: 5px solid #4dbf00; max-width: 80%; max-height: 80vh;">
      <source  src="{{ asset('videos/' . $video) }}" type="video/mp4">
    </video>

  </div>
</div>

<script>
  const video = document.getElementById('myVideo');
  video.addEventListener('keydown', (event) => {
    if (event.code === 'ArrowRight') {
      event.preventDefault();
      video.currentTime += 5;
    }
  });
</script>


<!-- new video end  -->






<script>

  function movienameLoad(){
    var moviename = sessionStorage.getItem('streamingMoviename');
    document.getElementById("streamingMoviename").innerHTML=moviename;
       
    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        moviename: moviename,
        _token: '{{ csrf_token() }}'
      },
      url: "/addrecent",
      success: function(data) {

        console.log("addrcent");



      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
     

  }
  movienameLoad();
</script>


@endsection