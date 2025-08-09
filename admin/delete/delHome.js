let cardContaner=document.querySelector(".justify-content-center");

const fetchUrl =`../php-data/allData.php`;

fetch(fetchUrl)
.then(response=>response.json())
.then(data=>{
       
    data.forEach(element => {
       cardContaner.innerHTML+=`
    <div class="col-md-4 col-sm-6">
    <a href="delete/delHome.php" class="service-card">
      <img src="../home-images/${element.img_path}" alt="House Image" class="service-image" />
      <div class="service-details">
        <h4 class="service-title">${element.house_name}</h4>
        <div class="house-info">
          <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
            <rect x="3" y="3" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" />
            <text x="12" y="16" text-anchor="middle" font-size="9" font-family="Arial, sans-serif" fill="currentColor">m²</text>
           </svg>: <strong>${element.square_meter} </strong>
          </span>
          <span>
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
             <line x1="3" y1="12" x2="21" y2="12" />
             <path d="M3 12l3-3v6l-3-3z"/>
             <path d="M21 12l-3-3v6l3-3z"/>
            </svg>
          : <strong>${element.length} X ${element.width}</strong>
         </span>
         <span>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#434343"><path d="M240-280h60v-60h360v60h60v-166q0-30-16.5-53.5T660-534v-66q0-33-23.5-56.5T580-680H380q-33 0-56.5 23.5T300-600v66q-27 11-43.5 34.5T240-446v166Zm60-120v-46q0-14 10-24t24-10h292q14 0 24 10t10 24v46H300Zm60-140v-80h240v80H360ZM160-80q-33 0-56.5-23.5T80-160v-640q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v640q0 33-23.5 56.5T800-80H160Zm0-80h640v-640H160v640Zm0 0v-640 640Z"/>
            </svg>
          : <strong>${element.bedroom}</strong>
         </span>
         <span>
            <button class="btn btn-danger btn-sm delete-btn mt-2" class="delete-btn" data-id="${element.house_description_id}" data-img="${element.img_path}">წაშლა</button>
         </span>


        </div>
      </div>
    </a>
  </div>
        `
    });
})

    cardContaner.addEventListener("click", function (e) {
  if (e.target.classList.contains("delete-btn")) {
    const houseId = e.target.getAttribute("data-id");
    const imgPath = e.target.getAttribute("data-img");

    if (confirm("დარწმუნებული ხარ რომ გინდა წაშლა?")) {
      fetch('delete/delHome.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: houseId, image: imgPath })
      })
      .then(response => response.json())
      .then(result => {
        alert(result.message);
        if (result.success) {
          e.target.closest(".col-md-4").remove(); 
        }
      });
    }
  }
});


