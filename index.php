<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      form {
        display: flex;
        flex-direction: column;
        width: 300px;
      }
      label {
        margin-block: 10px;
      }
      input {
        margin-block: 10px;
      }
    </style>
  </head>
  <body>
    <form method="POST" action="PHP/esempio.php">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" placeholder="inserisci nome" />
      <label for="cognome">Cognome</label>
      <input type="text" id="cognome" name="cognome" placeholder="inserisci cognome" />
      <input type="submit" value="invia dati" />
    </form>
    <?php if(1 < 5): ?>
      this will show if expression is true
    <?php else: ?>
      this will show if expression is false
    <?php endif; ?>



  </body>
</html>
