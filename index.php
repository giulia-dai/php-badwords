<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>
<form action="censura.php" method="get">
    <label  for="testo">Inserisci il testo</label>
    <input type="text" name="testo" placeholder="scrivi qui">

    <label for="censorship">scrivi qui la parola che vuoi censurare</label>
    <input type="text" name="censorship" placeholder="parola censurata">
    <button class="btn" type="submit">Esegui</button>

</form>

</body>

</html>