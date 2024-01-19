<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Register Form - CodeCraftedWeb</title>
    <link rel="stylesheet" href="deco.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e8e8e8;
        }

        .main {
            position: relative;
            display: flex;
            flex-direction: column;
            background-color: #240046;
            max-height: 450px;
            width: 400px;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: rgba(59, 0, 130, 0.442) 0px 30px 90px;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 14px;
            padding: 24px;
        }

        /*checkbox to switch from sign up to login*/

        #chk {
            display: none;
        }

        /*Login*/

        .login {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .login label {
            margin: 5% 0 5%;
        }

        label {
            color: #fff;
            font-size: 2rem;
            justify-content: center;
            display: flex;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        .input {
            width: 100%;
            height: 40px;
            font-size: 1rem;
            background: #e0dede;
            padding: 10px;
            margin-top: 15px;
            border: none;
            outline: none;
            border-radius: 4px;
        }

        /*Register*/

        .register {
            background: #eee;
            border-radius: 60% / 10%;
            transition: .8s ease-in-out;
        }

        .register label {
            color: #573b8a;
            transform: scale(.6);
        }

        #chk:checked~.register {
            transform: translateY(-68%);
        }

        #chk:checked~.register label {
            transform: scale(1);
            margin-bottom: .5rem;
        }

        #chk:checked~.login label {
            transform: scale(.6);
        }

        /*Button*/

        .form button {
            width: 70%;
            height: 40px;
            margin: 15px auto 10%;
            color: #fff;
            background: #573b8a;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: .2s ease-in;
        }

        .form button:hover {
            background-color: #6d44b8;
        }
    </style>
</head>

<!-- php -->
<?php

$hote = "localhost";
$user = "root";
$password = "root";
$dbName = "pageConnection";

$dsn = "mysql:host=$hote;dbname=$dbName;charset=utf8";
try {
    $connexion = new PDO($dsn, $user, $password);
    //die("Connexion réussie !");
} catch (PDOException $e) {
    die("Erreur de connexion: " . $e->getMessage());
}


if($_SERVER["REQUEST_METHOD"] == "POST") // si la methode utiliser est post
{
    $email = $_POST['email'];
    $password = $_POST['mdp'];
    if(!empty($email) && !empty($password))
    {
        // connexion a la base de donnée
        $req = $connexion->query("SELECT * FROM log WHERE email = '$email' AND mdp = '$password' ");
        $req = $req->fetch();
        if(isset($req['id']))
        {  
            $message = "vous etes connecté avec succes";
            header("Location:login.php?message=" . $message);    
        }
        else
        {
            $error_msg = "Email ou mot de passe incorect";
        }
    }
    // var_dump($_POST);

    function connection($connection)
{
    global $connexion;
    $query = "SELECT , pageConnexion.email, pageConnexion.mdp, profil.designation as profil_id
    FROM pageConnection 
    INNER JOIN profil ON profil.id = pageConnexion.profil_id 
    WHERE profil.designation LIKE '%$connection%' ";
    $stmt = $connexion->prepare($query);
    $stmt->execute();
    return $stmt;
}
}
?>

<!-- php -->

<body>
    <div class="container">
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">

            <div class="login">
                <form class="form" method="post">
                    <label for="chk" aria-hidden="true">Connexion</label>
                    <input class="input" type="email" name="email" placeholder="Email" required>
                    <input class="input" type="password" name="mdp" placeholder="Password" required>
                    <button>Connexion</button>
                </form>

    <?php
    if($error_msg)
    {
    ?>
    <p><?php echo $error_msg ?></p>
    <?php
    }
    ?>

            </div>

            <div class="register">
                <form class="form">
                    <label for="chk" aria-hidden="true">Register</label>
                    <input class="input" type="text" name="txt" placeholder="Username" required>
                    <input class="input" type="email" name="email" placeholder="Email" required>
                    <input class="input" type="password" name="pswd" placeholder="Password" required>
                    <button>Register</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>