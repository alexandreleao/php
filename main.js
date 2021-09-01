document.addEventListener("DOMContentLoaded", function(e) {

    console.warn('hola mundo', 'teste')

    //const nome = prompt('Escreva seu nome')

    //console.log(nome)


    document.getElementsByTagName('h1')

    const arrayTagsH1 = document.getElementsByTagName('h1')

    arrayTagsH1[0].innerHTML = "Mudança desde o JS"


    arrayTagsH1[0].addEventListener('click', ()=>{ alert('Adicionando um evento ao clicar')})

    const novoElemento = document.createElement('h2');

    novoElemento.innerHTML = "Texto renderizado do Javascript"

    document.body.appendChild(novoElemento);


    const li = document.getElementsByTagName('li');

    for(var i =0; i < li.length; i++){
        li[i].classList.add('teste')
    }

})