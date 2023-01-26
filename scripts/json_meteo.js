console.clear();

fetch("https://api.openweathermap.org/data/2.5/weather?q=Coimbra&units=metric&lang=pt&appid=0f6b94f0fdbdd6c9cb5f3b61cb9143fc")
    .then(function(response) {
        return response.json();
    }).then(function(json) {
    console.log(json);

    let container=document.querySelector(".containerMeteo");

    let titulo=document.createElement("h1");
    titulo.innerText="Meteorologia atual:";
    container.appendChild(titulo);

    let texto=document.createElement("span");
    texto.classList.add("item");
    container.appendChild(texto);

    let image="http://openweathermap.org/img/wn/"+json.weather[0].icon+"@2x.png";
    let z=document.createElement("img");
    z.setAttribute("src", image);
    z.classList.add("imgMeteo");
    container.appendChild(z);

    let nome=json.name;
    let nome1=document.createElement("p");
    nome1.innerText=nome;
    document.querySelector(".item").appendChild(nome1);

    let temp=json.main.temp;
    let temp1=document.createElement("p");
    temp1.innerText=temp+"ºC";
    document.querySelector(".item").appendChild(temp1);

    let desc=json.weather[0].description;
    let desc1=document.createElement("p");
    desc1.innerText=desc.charAt(0).toUpperCase()+desc.slice(1);
    document.querySelector(".item").appendChild(desc1);

    let hora=json.main.humidity;
    let hora1=document.createElement("p");
    hora1.innerText=hora+"% "+"humidade";
    document.querySelector(".item").appendChild(hora1);
});
