<?php
$bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8', 'root', '');
$recupMessages = $bdd->query('SELECT * FROM messages');
while ($message = $recupMessages->fetch()) {
    ?>
    <div class="message">
        <h4><?= $message['pseudo']; ?></h4>
        <p><?= $message['message']; ?></p>
    </div>
    <?php
}
?>
<style>
    .message {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
    }
    
    .message h4 {
        font-size: 20px;
        color: blue;
        margin-bottom: 5px;
    }
    
    .message p {
        font-size: 14px;
        color: #666;
    }
</style>
