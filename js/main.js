
    var nome = prompt("Write your name: ");
    if(nome == ""){
        alert("You didnt write your name!");
    }else{
    //alert(nome);
    var msg = document.getElementById("msg")
    msg.innerHTML = "Entrou no site " + nome;
    msg.classList.add("bemvindo")

    let parag = document.querySelector("p");
    parag.innerHTML = "oioioiiioiooioioioiooiioiiio";
    
    var teste = document.getElementsByTagName("p");
    for(i = 0; i < teste.length; i++){
        teste[i].innerHTML = "SOREIGUEIDOM"
    }

    setTimeout(() => {
        if(confirm("Are you sure you want to leave?")){
            window.location = "https://google.comdsd"
        } 
    }, 2000);
}
function nomedafuncao(url) {
    // src = "download.jpg"
    var img = document.createElement("img");
    img.src = "download.jpg";
    var src = document.getElementById("header");
    src.appendChild(img);
}



function carregarImagem(){
    fetch('http://zoo-animal-api.herokuapp.com/animals/rand',
    {mode: 'cors' }
    ).then(response => {
        return response.json();
    }).then(function(json){
        console.log(json);
        document.getElementById("foto").innerHTML = '<img src="' + json.image_link + '" alt="" />'
    })

    setTimeout(() => {
        carregarImagem();
    },5000);
}