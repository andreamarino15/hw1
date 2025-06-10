
function onClick(event) {

    const bottone = event.currentTarget;
    const nuovo_src = bottone.src;
    const nuovo_titolo = bottone.dataset.titolo;
    const nuovo_prezzo = bottone.dataset.prezzo;
    const nuovo_colore = bottone.dataset.color;

    const immagine_principale = document.querySelector('#contenitore_immagine img');
    immagine_principale.srcset = nuovo_src;
    const contenitore_titolo = document.querySelector('#titolo h1 span');
    contenitore_titolo.textContent = nuovo_titolo;
    const contenitore_prezzo = document.querySelector('#primo_div h2');
    contenitore_prezzo.textContent = nuovo_prezzo;
    const contenitore_colore = document.querySelector('#titolo #color');
    contenitore_colore.textContent = nuovo_colore;
}

//const bottone = document.querySelector('.contenitore_immagine #seconda');
//bottone.addEventListener('click', onClick);


const lista = document.querySelectorAll('.contenitore_immagine img'); // lista di tutte le immagini piccole


for (const img of lista) {
    img.addEventListener('click', onClick); // per ogni immagine cliccata esegue la funzione onClick
}

function addToFavourite(event) {
    event.stopPropagation();
    // Preparo i dati da mandare al server e invio la richiesta con POST
    console.log("Salvataggio")

    // Recupera l'immagine principale
    const mainImage = document.querySelector('#contenitore_immagine img');
    const mainImageSrc = mainImage.srcset.split(',')[0].trim().split(' ')[0]; // prende la pima immagine tra quelle nel srset

    // Recupera i dati del prodotto
    const titolo = document.querySelector('#titolo h1 span').textContent;
    const prezzo = document.querySelector('#primo_div h2').textContent;

    // Recupera tutte le varianti
    const varianti = Array.from(document.querySelectorAll('#scelta_immagine .contenitore_immagine img')).map(img => ({ // Array.from(...) -> Trasforma quella NodeList in un vero e proprio array, così possiamo usare metodi come .map().
        titolo: img.dataset.titolo,
        prezzo: img.dataset.prezzo,
        src: img.src
    }));

    // Prepara i dati per il server
    const formData = new FormData(); // FormData è un formato usato per inviare dati (specialmente file o dati da moduli) tramite richieste HTTP, come quelle POST.
    formData.append('action', 'add');  // <-- Qui specifichi che vuoi aggiungere
    formData.append('main_image', mainImageSrc);
    formData.append('titolo', titolo);
    formData.append('prezzo', prezzo);
    formData.append('varianti', JSON.stringify(varianti)); //Poiché FormData non può inviare direttamente oggetti complessi, lo converte in stringa JSON usando JSON.stringify().
    //Così il server riceverà una stringa JSON che potrà poi interpretare e trasformare di nuovo in un oggetto/array.


    fetch("preferiti.php", { method: 'post', body: formData }).then(preferitiResponse, preferitiError).catch(error => {
            console.error("Errore:", error);
            if (error.error) {
                alert(error.error); // Mostra l'errore all'utente
            } else {
                alert("Si è verificato un errore durante il salvataggio");
            }
        });
}

const cuore = document.querySelector('#titolo h1 svg');
cuore.addEventListener('click', addToFavourite);

function preferitiResponse(response) {
    console.log(response);
    return response.json().then(databaseResponse);
}

function preferitiError(error) {
    console.log("Errore");
}

function databaseResponse(json) {
    if (!json.ok) {
        preferitiError();
        return null;
    }
}