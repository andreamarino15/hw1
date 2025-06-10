document.addEventListener("DOMContentLoaded", function () {
    // Prepara i dati da mandare
    const formData = new FormData();
    formData.append('action', 'get');

    fetch("preferiti.php", { method: "POST", body: formData })
        .then(response => response.json())
        .then(json => {
            if (!json.ok) {
                document.querySelector("#wishlist-container").textContent = "Errore nel caricamento dei preferiti.";
                return;
            }

            mostraPreferiti(json.preferiti);
        })
        .catch(() => {
            document.querySelector("#wishlist-container").textContent = "Errore durante la richiesta.";
        });
});

function mostraPreferiti(preferiti) {
    const container = document.querySelector("#wishlist-container");
    container.innerHTML = "";

    if (preferiti.length === 0) {
        container.textContent = "Non hai ancora preferiti salvati.";
        return;
    }

    preferiti.forEach(item => {
        const div = document.createElement("div");
        div.classList.add("preferito");
        div.dataset.id = item.id;

        const titolo = document.createElement("h2");
        titolo.textContent = item.titolo;

        const prezzo = document.createElement("p");
        prezzo.textContent = item.prezzo;

        const img = document.createElement("img");
        img.src = item.main_image;
        img.alt = item.titolo;

        const elimina = document.createElement("span");
        elimina.classList.add("elimina-preferito");
        elimina.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" viewBox="0 0 24 24">
        <path d="M18.3 5.71a1 1 0 0 0-1.41 0L12 10.59 7.11 5.7a1 1 0 0 0-1.41 1.41L10.59 12l-4.89 4.89a1 1 0 1 0 1.41 1.41L12 13.41l4.89 4.89a1 1 0 0 0 1.41-1.41L13.41 12l4.89-4.89a1 1 0 0 0 0-1.4z"/>
        </svg>`;

        elimina.addEventListener("click", () => deletePreferito(item.id, div));

        div.appendChild(titolo);
        div.appendChild(prezzo);
        div.appendChild(img);
        div.appendChild(elimina);

        container.appendChild(div);
    });
}

function deletePreferito(id, elementoDiv) {
    const formData = new FormData();
    formData.append('action', 'delete');
    formData.append('id', id);

    fetch("preferiti.php", { method: "POST", body: formData })
        .then(response => response.json())
        .then(json => {
            if (!json.ok) {
                alert("Errore durante l'eliminazione.");
                return;
            }

            elementoDiv.remove(); // Rimuove il div dalla pagina
        })
        .catch(() => {
            alert("Errore di rete durante l'eliminazione.");
        });
}
