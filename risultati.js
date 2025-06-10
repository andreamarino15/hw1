document.addEventListener("DOMContentLoaded", function() { 
    //Questo codice dice: “Aspetta che tutta la pagina sia caricata e pronta (HTML, DOM), poi esegui la funzione interna.”Serve per assicurarsi che i nodi HTML che vogliamo manipolare siano disponibili.
    const params = new URLSearchParams(window.location.search); //window.location.search è la parte di URL dopo il punto di domanda ?, cioè la query string.
    //new URLSearchParams(...) è un modo comodo per lavorare con questa stringa, estrarre i singoli parametri in modo semplice.
    const searchTerm = params.get('search'); //new URLSearchParams(...) è un modo comodo per lavorare con questa stringa, estrarre i singoli parametri in modo semplice.

    if (!searchTerm) {
        document.querySelector('#articoli').textContent = 'Nessun termine di ricerca fornito.';
        return;
    }

    /*Qui fai una chiamata HTTP GET via fetch a uno script PHP chiamato fetch_risultati.php,
    passando nella query string il termine di ricerca (codificato correttamente con encodeURIComponent per evitare problemi con caratteri speciali).
    Questo script PHP si aspetta di ricevere il parametro search e restituirà i risultati (in formato JSON).*/
    fetch("fetch_risultati.php?search=" + encodeURIComponent(searchTerm))
        .then(response => response.json())
        .then(jsonSearch)
        .catch(() => {
            document.querySelector('#articoli').textContent = 'Errore durante il caricamento dei risultati.';
        });
});

function jsonSearch(json){
    const divArticoli = document.querySelector('#articoli');
    divArticoli.innerHTML = ''; // Pulisci prima i risultati vecchi

    if(json.length === 0){
        divArticoli.textContent = "Nessun articolo trovato";
        return;
    }

    json.forEach(function(articolo){
        const articoloDiv = document.createElement('div');
        articoloDiv.classList.add('articolo');

        const nome = document.createElement('h2');
        nome.textContent = articolo.nome;

        const prezzo = document.createElement('p');
        prezzo.textContent = 'Prezzo: $' + articolo.prezzo;

        const immagine = document.createElement('img');
        immagine.src = articolo.immagine;
        immagine.alt = articolo.nome;

        articoloDiv.appendChild(nome);
        articoloDiv.appendChild(prezzo);
        articoloDiv.appendChild(immagine);

        divArticoli.appendChild(articoloDiv);
    });
}
