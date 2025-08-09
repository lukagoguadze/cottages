let vavDropdown=document.querySelector(".dropdown-menu");
fetch("../php-data/dropdown.php")
.then(response=>response.json())
.then(data=>{
    
    data.forEach(element => {
        vavDropdown.innerHTML+=`
            <li><a class="dropdown-item" href="index.php?type=${encodeURIComponent(element.house_type)}">${element.house_type}</a></li>
    `
    });
})



