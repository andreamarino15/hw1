<?php

    require_once "check_session.php";
    if(checkSession()){
        header("Location: hw1.php");
        exit;
    }

    // Verifica l'esistenza di dati POST
    if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["email"]) && !empty($_POST["name"]) && 
        !empty($_POST["surname"]) && !empty($_POST["confirm_password"]) && !empty($_POST["allow"]))
    {
        $error = array();
        $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']) or die(mysqli_error($conn));

        
        # USERNAME
        // Controlla che l'username rispetti il pattern specificato
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $_POST['username'])) {
            $error[] = "Username non valido";
        } else {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            // Cerco se l'username esiste già o se appartiene a una delle 3 parole chiave indicate
            $query = "SELECT username FROM utente WHERE username = '$username'";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                $error[] = "Username già utilizzato";
            }
        }
        # PASSWORD
        if (strlen($_POST["password"]) < 6) {
            $error[] = "Caratteri password insufficienti, inserire più di 6 caratteri";
        } 
        # CONFERMA PASSWORD
        if (strcmp($_POST["password"], $_POST["confirm_password"]) != 0) {
            $error[] = "Le password non coincidono";
        }
        # EMAIL
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = mysqli_real_escape_string($conn, strtolower($_POST['email']));
            $res = mysqli_query($conn, "SELECT email FROM utente WHERE email = '$email'");
            if (mysqli_num_rows($res) > 0) {
                $error[] = "Email già utilizzata";
            }
        }
        #CHECKBOX
        if(!isset($_POST['allow'])){
            $error[] = 'Compila tutti i campi';
        }


        # REGISTRAZIONE NEL DATABASE
        if (count($error) == 0) {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $surname = mysqli_real_escape_string($conn, $_POST['surname']);

            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $password = password_hash($password, PASSWORD_BCRYPT);

            $query = "INSERT INTO utente(username, password, name, surname, email) VALUES('$username', '$password', '$name', '$surname', '$email')";
            
            if (mysqli_query($conn, $query)) {
                $_SESSION["_agora_username"] = $_POST["username"];
                $_SESSION["_agora_user_id"] = mysqli_insert_id($conn);
                mysqli_close($conn);
                header("Location: hw1.php");
                exit;
            } else {
                $error[] = "Errore di connessione al Database";
            }
        }

        mysqli_close($conn);
    }
    else if (isset($_POST["username"])) {
        $error = array("Riempi tutti i campi");
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" href="sign_up.css">
        <script src='sign_up.js' defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav id="navbar">
            <div id="contenitore_logo">
                <svg class="stockx-icon " focusable="false" viewBox="0 0 201 40" aria-hidden="true" style="fill: var(--chakra-colors-brand-primary, brand-primary);"><title>StockX Logo</title><g><path d="M186.401 27.5001L201.001 40V30L189.328 20.0056L201.001 10V0L180.601 17.4859V12.4999L166.001 0V10L177.674 19.9944L166.001 30V40L186.401 22.5144V27.5001Z"></path><path d="M20.3007 16.8L13.7506 15.55C10.1005 14.85 8.50062 14 8.50062 12C8.50062 9.19995 11.6506 7.74994 15.6006 7.74994C19.7506 7.74994 23.4506 9.34994 24.2506 12.75H31.2508C30.4508 6.25002 24.6007 2 15.6006 2C7.30062 2 0.750616 5.65011 0.750616 12.2501C0.750616 18.0001 5.65063 20.9001 12.2006 22.1501L18.7506 23.4001C22.4007 24.1001 24.2506 25.2501 24.2506 27.5001C24.2506 30.55 20.8506 32.2501 16.6506 32.2501C11.5006 32.2501 8.05063 29.7501 7.25063 26.0001H0.000610352C1.0506 33.5001 6.95062 38.0001 16.6506 38.0001C25.3006 38.0001 32.0006 34.5001 32.0006 27.25C32.0007 20.85 26.8506 18.05 20.3007 16.8Z"></path><path d="M48.6507 6.25001V2.5H41.4007V5.25001C41.4007 8.49998 39.9007 10 36.6507 10H34.6007V15.5H40.3507V29.0001C40.3507 35.0001 43.3007 37.5001 50.3007 37.5001H56.2507V32H50.9507C48.4507 32 47.6007 31.25 47.6007 29V15.5H56.2507V10H45.5007L48.6507 6.25001Z"></path><path d="M111.351 32.5C106.101 32.5 102.751 28.8 102.751 23.8C102.751 18.8 106.101 15.1 111.351 15.1C115.401 15.1 118.301 17.35 119.051 20.1H126.201C124.901 13.6 119.251 9.59998 111.351 9.59998C101.901 9.59998 95.3508 15.3 95.3508 23.8C95.3508 32.3 101.901 38 111.351 38C119.251 38 125.451 34 126.451 27.25H119.301C118.551 29.75 115.851 32.5 111.351 32.5Z"></path><path d="M75.3507 9.59998C65.6008 9.59998 59.3507 15.3 59.3507 23.8C59.3507 32.3 65.6007 38 75.3507 38C85.1007 38 91.3508 32.3 91.3508 23.8C91.3508 15.3 85.1008 9.59998 75.3507 9.59998ZM75.3507 32.5C70.1007 32.5 66.7507 28.8 66.7507 23.8C66.7507 18.8 70.1007 15.1 75.3507 15.1C80.6007 15.1 83.9508 18.8 83.9508 23.8C83.9508 28.8 80.6008 32.5 75.3507 32.5Z"></path><path d="M145.151 22.9001L160.201 10.0001H150.451L138.151 20.8001V2.5H130.901V37.5001H138.151V28.9001L142.498 25.1742L153.051 37.5001H162.251L149.751 22.9001H145.151Z"></path></g></svg>
            </div>
        </nav>

        <div id="section">
            <h1>
                Sign Up
            </h1>
            <div id="contenitore_dati">
                <form name='signup' method='post' enctype="multipart/form-data" autocomplete="off">
                    <div id="username" class="input_container">
                        <label for="username">Username</label>
                        <input type="text" name="username" <?php if(isset($_POST["username"])){echo "value=".$_POST["username"];} ?>>
                    </div>
                    <div id="name" class="input_container">
                        <label for="name">Name</label>
                        <input type="text" name="name" <?php if(isset($_POST["name"])){echo "value=".$_POST["name"];} ?>>
                    </div>
                    <div id="surname" class="input_container">
                        <label for="surname">Last Name</label>
                        <input type="text" name="surname" <?php if(isset($_POST["surname"])){echo "value=".$_POST["surname"];} ?>>
                    </div>
                    <div id="email" class="input_container">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" <?php if(isset($_POST["email"])){echo "value=".$_POST["email"];} ?>>
                    </div>
                    <div id="password" class="input_container">
                        <label for="password">Password</label>
                        <input type="password" name="password" <?php if(isset($_POST["password"])){echo "value=".$_POST["password"];} ?>>
                    </div>
                    <div id="confirm_password" class="input_container">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" <?php if(isset($_POST["confirm_password"])){echo "value=".$_POST["confirm_password"];} ?>>
                    </div>
                    <div id="terms">
                    <input type="checkbox" name="allow" <?php if(isset($_POST["allow"])){echo "checked";} ?>>
                        <label for="allow">By logging in, you agree to the <a href="https://stockx.com/terms">Terms of Service</a></label>
                    </div>
                    <?php if(isset($error)) { // error -> array PHP che contiene i messaggi di errore generati lato server
                        foreach($error as $err) { // Il foreach stampa un <div class='errorj'> per ogni errore, con dentro uno <span> contenente il messaggio.
                            echo "<div class='errorj'><span>".$err."</span></div>"; 
                            // Questo span viene usato solo qui, in basso nel form. Serve a mostrare errori globali o non specificamente legati a un singolo campo.
                        }
                    } ?>
                    <div id="submit_container">
                        <input type="submit" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>