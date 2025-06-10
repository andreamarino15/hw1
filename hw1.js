// variabili globali che rappresentato le due foto che si devono alternare;
const first = 'https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltcf4837ed50307468/67bfde986bdc801877691c40/EN-AJ1_High_Union_LA_Chicago_ShadowPrimary_Desktop-Small.jpg?auto=webp&format=pjpg&width=1246&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltcf4837ed50307468/67bfde986bdc801877691c40/EN-AJ1_High_Union_LA_Chicago_ShadowPrimary_Desktop-Small.jpg?auto=webp&format=pjpg&width=1246&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/bltcf4837ed50307468/67bfde986bdc801877691c40/EN-AJ1_High_Union_LA_Chicago_ShadowPrimary_Desktop-Small.jpg?auto=webp&format=pjpg&width=1246&dpr=3&quality=50 3x';
const second = 'https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt19d2b6effefccff4/67f42bd806f6daf0312a3b17/Nike_ReactX_Rejuven8_-_EN_-_Primary_Desktop-Small.jpg?auto=webp&format=pjpg&width=1246&dpr=1&quality=80 1x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt19d2b6effefccff4/67f42bd806f6daf0312a3b17/Nike_ReactX_Rejuven8_-_EN_-_Primary_Desktop-Small.jpg?auto=webp&format=pjpg&width=1246&dpr=2&quality=75 2x, https://images-cs.stockx.com/v3/assets/blt818b0c67cf450811/blt19d2b6effefccff4/67f42bd806f6daf0312a3b17/Nike_ReactX_Rejuven8_-_EN_-_Primary_Desktop-Small.jpg?auto=webp&format=pjpg&width=1246&dpr=3&quality=50 3x';
function changeImage(){

    const image = document.querySelector('#start #contenitore_start a img');

    if(image.srcset === first){ // se la mia immagine è uguale alla prima, al click del bottone cambia alla seconda
        image.srcset = second;
    }else{ // se no l'ooposto, ritorna alla prima
        image.srcset = first;
    }
}

// stessa funzione per entrambi i bottoni, risultato: continuano ad alternarsi le foto sia a sinistra che a destra!
const bottone = document.querySelector('#start #right');
const bottone2 = document.querySelector('#start #left');
bottone.addEventListener('click' , changeImage);
bottone2.addEventListener('click' , changeImage);

function dropDown (event){
    const parola = event.currentTarget;
    const menu_aperto = document.querySelector('#menu_comparsa');

    menu_aperto.classList.remove('hidden');
}

const parola = document.querySelector('[data-index="1"]');
parola.addEventListener('mouseover' , dropDown);
const menu_aperto = document.querySelector('#menu_comparsa');
menu_aperto.addEventListener('mouseover' , dropDown);


function dropUp (event){
    const parola = event.currentTarget;
    const menu_aperto = document.querySelector('#menu_comparsa');

    menu_aperto.classList.add('hidden');
}


parola.addEventListener('mouseleave' , dropUp);
menu_aperto.addEventListener('mouseleave' , dropUp);


function openChat(event){
    const button = event.currentTarget;

    const nuovo_div = document.querySelector('#hidden_chat');
    nuovo_div.classList.remove('hidden');
}

const button = document.querySelector('#chat');
button.addEventListener('click' , openChat);

function closeChat(event){
    const close = event.currentTarget;

    const nuovo_div = document.querySelector('#hidden_chat');
    nuovo_div.classList.add('hidden');
}

const close = document.querySelector('#hidden_chat header svg');
close.addEventListener('click' , closeChat);


function startChat(event){
    const chat_now = event.currentTarget;
    chat_now.classList.add('hidden');

    const chat = document.querySelector('#text_container');
    chat.classList.remove('hidden');
}

const chat_now = document.querySelector('#hidden_chat #contenitore_chat button');
chat_now.addEventListener('click', startChat);

// API YOUTUBE
/*
// variabili globali
const key = 'AIzaSyBNPH3GN8ApXtwaK-mJESJlFqeWy3ynw7M'; // chiave per API
const playlistID = 'UU8i2VloWFKMugidh9rCUAoA'; // id del canale
const endPoint = 'https://www.googleapis.com/youtube/v3/playlistItems'; // link dell'API
const API_URL = endPoint + '?key=' + key + '&playlistId=' + playlistID + '&part=snippet&maxResults=1'; // bisogna separare le variabili con & e l'endpoint col ?
// snippet ritorna sola la parte snippet del json mentre maxResults solo un valore impostato
*/
function onResponse(response){
    return response.json(); // gli chiamo il parametro json
}


function onJsonYT(json){
    console.log("Risposta completa dall'API:", json);

    if (json.items && json.items.length > 0) {
        const videoId = json.items[0].snippet.resourceId.videoId;
        // .items[0] = primo elemento da cui prendo lo snippet, poi il resourceId per prendere infine il videoID
        const videoURL = 'https://www.youtube.com/embed/' + videoId; //aggiungo al link il link del video che mi interessa
        document.querySelector('#video').src = videoURL;
    } else if (json.error) {
        console.error("Errore dalla YouTube API:", json.error.message);
    }else {
        console.error('Nessun video trovato nella playlist');
    }
}

// fetch per API youtube
fetch('API_youtube.php').then(onResponse).then(onJsonYT); // mettere sempre dopo le funzioni


// API VERIFICA EMAIL

// variabili globali
//const key_verify = '32b516ddd63147c48c9da218b638fcc5'; //32b516ddd63147c48c9da218b638fcc5
//const endPoint_verify = 'https://emailvalidation.abstractapi.com/v1/';

function controllo(status) {
    const messaggio = document.createElement('h1');

    if (status === true) {
        messaggio.innerText = 'Email valida!';
        messaggio.style.color = 'white';
    } else {
        messaggio.innerText = 'Errore!'
        messaggio.style.color = 'white';
    }

    const container = document.querySelector('#newsLetter');
    container.innerHTML = '';
    container.appendChild(messaggio); // il mio onJson
}

function onJsonEmail(json) {
    console.log('Risposta completa API:', json); // Debug per vedere cosa restituisce
    
    // AbstractAPI restituisce is_valid_format.value
    const isValid = json.is_valid_format && json.is_valid_format.value === true;
    controllo(isValid);
}

function invioEmail(event) {
    event.preventDefault(); //evito che si ricarica la pagina

    const input = document.querySelector('#newsLetter form #contenitore_input input');
    const email = input.value; // quello che scriviamo dentro la barra dell'input viene messo in questa variabile
    console.log(email); //debug

    //const verify_API_URL = `${endPoint_verify}?api_key=${key_verify}&email=${encodeURIComponent(email)}`;//endPoint_verify + encodeURIComponent(email) + '?token=' + key_verify;
    fetch('email_api.php?email=' + encodeURIComponent(email)).then(onResponse).then(onJsonEmail);
}

const emailSubmit = document.querySelector('#newsLetter form #iscrizione');
emailSubmit.addEventListener('click', invioEmail);

