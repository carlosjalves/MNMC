//CAROUSEL/
let index = 1;

//O método window.matchMedia () retorna um objeto MediaQueryList que representa os resultados da string de uma media query CSS.
let x1 = window.matchMedia("(min-width: 1110px)");
let x2 = window.matchMedia("(min-width: 801px) and (max-width: 1110px)");
let x3 = window.matchMedia("(max-width: 800px)");
showCarousel(index);
console.log(index);

//CONTROLS - ARROWS
function addCarousel(n){
    showCarousel(index+=n);
}
//IMAGES
function showCarousel(n){
    //SELECTORS
    let img = document.querySelectorAll(".carouselimg");

    //REMOVE DISPLAY
    for(let i=0; i<img.length; i++){
        img[i].classList.remove("img_show");
    }

    //DISPLAY CURRENT
    function myFunction1(t) {
        if (t.matches) { // Se a media query corresponder, ou seja, se a página tiver mais de 1110px

            //CICLE/LOOP para quando aparecem 3 imagens
            if(n>img.length-2) index=1;
            if(n < 1) index=img.length-2;

            img[index-1].classList.add("img_show");
            img[index].classList.add("img_show");
            img[index+1].classList.add("img_show");
        }
    }

    function myFunction2(t) {
        if (t.matches) { // Se a media query corresponder, ou seja, se a página tiver entre 801px e 1110px

            //CICLE/LOOP para quando aparecem 2 imagens
            if(n>img.length-1) index=1;
            if(n < 1) index=img.length-1;

            img[index-1].classList.add("img_show");
            img[index].classList.add("img_show");
        }
    }

    function myFunction3(t) {
        if (t.matches) { // Se a media query corresponder, ou seja, se a página tiver menos de 800px

            //CICLE/LOOP para quando aparece 1 imagem
            if(n>img.length) index=1;
            if(n < 1) index=img.length;

            img[index-1].classList.add("img_show");
        }
    }

    myFunction1(x1); // Se a pagina tiver mais de 1110px Executa a funçao 1, que mostra 3 destaques
    myFunction2(x2); // Se a pagina tiver entre 801px e 1110px Executa a funçao 2, que mostra 2 destaques
    myFunction3(x3); // Se a pagina tiver menos de 800px Executa a funçao 3, que mostra 1 destaques
}