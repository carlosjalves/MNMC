let button=document.querySelector(".menuButton");
let dropButton=document.querySelectorAll(".dropbtn");
let x=0, y=0;

button.addEventListener("click", function (){

    if(x===0) {
        document.querySelector(".mobileNav").classList.toggle("show");
        x++;
    }else{
        document.querySelector(".mobileNav").classList.remove("show");
        x=0;
    }
});

for (let i=0; i<dropButton.length; i++) {
    dropButton[i].addEventListener("click", function () {

        let toggle=document.querySelectorAll(".dropdown-content");

        if (y===0) {
            toggle[i].classList.toggle("show1");
            y++;
        } else {
            toggle[i].classList.remove("show1");
            y = 0;
        }
    });
}