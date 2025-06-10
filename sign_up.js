const formStatus = {'upload': true}; 
/*È un oggetto che tiene traccia dello stato di ogni campo del form. Per ogni campo validato correttamente, 
la rispettiva chiave avrà valore true. Alla fine, viene verificato che tutti i campi siano true*/

function fetchResponse(response) {
    if (!response.ok) return null;
    return response.json(); // converte la risposta JSON in oggetto JS
} // questa funzione varrà sia per l'username che per l'email, in quanto creo due pagine php apparte di controllo di unicità sia per email che per username dove la risposta verrà comunicata e gestita qui tramite json
// Quando usi fetch() in JavaScript, la risposta dal server deve essere in un formato strutturato e facilmente interpretabile. Il formato più usato per questo è JSON (JavaScript Object Notation).

/*
Questa funzione:

controlla che la risposta dal server sia valida (response.ok)
se sì, converte la risposta da JSON a oggetto JavaScript (response.json())
*/

// PRIMA FUNZIONE --> USERNAME

function checkUsername(event){
    const input = event.currentTarget;

    if(!/^[a-zA-Z0-9_]{1,15}$/.test(input.value)){
        input.parentNode.querySelector('span').textContent = "Sono ammesse lettere, numeri e underscore per un massimo di 15 caratteri";
        input.parentNode.classList.add('errorj');
        formStatus.username = false;
    } else {
        fetch("controllo_username.php?q="+encodeURIComponent(input.value)) // manda richiesta get a controllo_username; controllo di unicità dell'username; input.value --> valore inserito dall'utente; encodeURIComponent --> codifica il valore in modo sicuro per l?URL, tenendo conto di spazi, simboli, ecc
            .then(fetchResponse) // Il metodo fetch() restituisce una Promise, e then(fetchResponse) serve a processare la risposta.
            .then(jsonCheckUsername); // il json ottenuto dalla risposta viene passato a questa funzione
    } 
}

function jsonCheckUsername(json) {
    // Controllo il campo exists ritornato dal JSON
    if (formStatus.username = !json.exists) {
        document.querySelector('#username').classList.remove('errorj');
    } else {
        document.querySelector('#username').classList.add('errorj');
    }
}
/*
Se json.exists è false (cioè username disponibile), rimuove eventuali errori visivi.
Se json.exists è true, mostra un messaggio di errore e aggiunge la classe .errorj.
*/

// SECONDA FUNZIONE --> NAME

function checkName(event) {
    const input = event.currentTarget;
    
    if (formStatus[input.name] = input.value.length > 0) { // controlla se il capo nome è vuoto o meno
        input.parentNode.classList.remove('errorj');
    } else {
        input.parentNode.classList.add('errorj');
    }
}

// TERZA FUNZIONE --> SURNAME

function checkSurname(event) {
    const input = event.currentTarget;
    
    if (formStatus[input.surname] = input.value.length > 0) {
        input.parentNode.classList.remove('errorj');
    } else {
        input.parentNode.classList.add('errorj');
    }
}

// QUARTA FUNZIONE --> EMAIL

function checkEmail(event){
    const input = event.currentTarget;

    if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(emailInput.value).toLowerCase())){
        document.querySelector('#email').classList.add('errorj');
        formStatus.email = false; // Segno che il campo email del form non è ancora valido, oppure ha un errore
    }else {
        fetch("check_username.php?q="+encodeURIComponent(input.value)) // richiesta get
        .then(fetchResponse) // prima funzione json --> js
        .then(jsonCheckUsername); // analizza il json.exists
    }
}


function jsonCheckEmail(json) {
    if (formStatus.email = !json.exists) {
        document.querySelector('#email').classList.remove('errorj');
    } else {
        document.querySelector('#email').classList.add('errorj');
    }
}

// QUINTA FUNZIONE --> PASSWORD

function checkPassword(event){
    const input = event.currentTarget;

    if(formStatus.password = passwordInput.value.length >= 6){
        document.querySelector('#password').classList.remove('errorj');
    }else {
        document.querySelector('#password').classList.add('errorj');
    }
}

// SESTA FUNZIONE --> CONFIRM_PASSWORD

function checkConfirmPassword(event) {
    const input = event.currentTarget;

    if (formStatus.confirmPassword = confirmPasswordInput.value === document.querySelector('#password input').value) {
        document.querySelector('#confirm_password').classList.remove('errorj');
    } else {
        document.querySelector('#confirm_password').classList.add('errorj');
    }
}

// SETTIMA FUNZIONE --> SUBMIT

function checkSignup(event) {
    const checkbox = document.querySelector('#allow input'); // Prende il riferimento all’elemento che ha generato l’evento — in questo caso, il checkbox
    formStatus[checkbox.name] = checkbox.checked;
    if (Object.keys(formStatus).length !== 8 || Object.values(formStatus).includes(false)) {
        event.preventDefault();
    }
} // Alla sottomissione del form, blocca l'invio se qualche campo non è validato (false o mancante).


document.querySelector('#username input').addEventListener('blur', checkUsername);
document.querySelector('#name input').addEventListener('blur', checkName);
document.querySelector('#surname input').addEventListener('blur', checkName);
document.querySelector('#email input').addEventListener('blur', checkEmail);
document.querySelector('#password input').addEventListener('blur', checkPassword);
document.querySelector('#confirm_password input').addEventListener('blur', checkConfirmPassword);
document.querySelector('form').addEventListener('submit', checkSignup);
