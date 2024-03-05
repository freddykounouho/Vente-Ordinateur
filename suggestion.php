<?php 
$bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8', 'root', '');

if (isset($_POST['Valider'])) {
  if (!empty($_POST['pseudo']) && !empty($_POST['message'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = htmlspecialchars($_POST['message']);

    $insererMessage = $bdd->prepare('INSERT INTO messages(pseudo, message) VALUES(?, ?)');
    $insererMessage->execute(array($pseudo, $message));
  } else {
    echo "Veuillez compléter tous les champs...";
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="cssStyle/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="vente.css">
  <title></title>
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-pink">
      <a class="navbar-brand" href="#">Mon entreprise</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">À propos</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="suggestion.php">Discussion</a>
            </li>
          </ul>
      </div>
    </nav>

    <div class="contactez">
        <h4>Commentaires</h4>
    </div>

    <main class="container">
        <form method="POST" action="">
      <div class="form-group">
        <input class="form-control" type="text" name="pseudo" placeholder="Votre pseudo ici...">
      </div>

      <div>
        <textarea name="message" class="form-control" placeholder="Votre message ici..."></textarea>
      </div>
      <br>
        
      <div class="form-group">
        <button class="btn btn-success" type="submit" name="Valider">Envoyer</button>
      </div>
    </form>
    </main>

    <section id="messages"></section>

  <script>
      setInterval(load_messages, 500);
      function load_messages(){
          $('#messages').load('loadmessage.php');
      } 
    </script>
</body>
<footer>
    <div class="wrapper">
      <h1>Mon entreprise</h1>
      <div class="Copyright">&copy; 2023 Mon entreprise</

      <div align="center">
       <a href="https://www.facebook.com/profile.php?id=100092839172203"><img src="image/facebook.png" height="50" width="50"></a> 
      <a href=""><img src="image/insta.png" height="50" width="49"></a>  
      <a href=""><img src="image/whats.png" height="50" width="49"></a>  
      </div>
       
  </footer>
</html>