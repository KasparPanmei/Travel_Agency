const togglebtn = document.getElementsByClassName('toggle-btn')[0]
const navbarlinks = document.getElementsByClassName('navbar-links')[0]


togglebtn.addEventListener('click', () => 
{
    navbarlinks.classList.toggle('active')
})

// load-more-btn


let loadMoreBtn = document.querySelector("#load-more");
let currentItem = 3;

loadMoreBtn.onclick = () =>
{
    let boxes =[...document.querySelectorAll('.container .box-container .box')];
    for(var i = currentItem; i < currentItem + 3; i++)
    {
        boxes[i].style.display = 'inline-block';
    }
    currentItem += 3;
    if(currentItem >= boxes.length)
    {
        loadMoreBtn.style.display = 'none';
    }
}

let pop_up = document.getElementById("popup");
let body_bg = document.getElementById("body");

function openPopup()
{
    pop_up.style.visibility ="visible";
    pop_up.style.transform ="translate(-50%,-50%) scale(1)";
    body_bg.style.visibility  ="hidden";
}
function closePopup()
{
    pop_up.style.transform ="translate(-50%,-50%) scale(0.1)";
    pop_up.style.visibility="hidden";
    body_bg.style.visibility  ="visible";
}