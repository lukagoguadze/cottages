let videoContaner=document.querySelector(".row");
fetch("../php-data/getVideos.php")
.then(response=>response.json())
.then(data=> {
    console.log(data)
    data.forEach(element => {
        console.log(element.video_path)
        videoContaner.innerHTML+=`<div class="col-md-6 col-lg-4 mb-4">
        <div class="video-card p-3 shadow rounded bg-light">
          <video controls class="w-100 rounded">
            <source src="../videos/${element.video_path}" type="video/mp4">
          </video>
          <p class="mt-2 text-center text-muted">${element.video_name}</p>
        </div>
      </div>`
    });
})


/*
{
    data.forech(i => {
    });

*/