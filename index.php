<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>openClassrooms Mini-Chat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="main-menu">

</nav>

<section class="main-section">

<h1>Welcome to the minichat !</h1>

<div class="chat-container">

<div class="input-chat">

<form action="minichat.php" method="POST" class="chat-form">

<div class="chat-line"><label>Pseudo</label><input name="pseudo" placeholder="pseudo" type="text" ></div>
<div class="chat-line"><label>Message</label><input name="message" placeholder="message" type="text" ></div>
<div class="chat-line"><input type="submit" value="Envoyer"></div>

</form>

</div>

</div>

</section>

</body>

</html>