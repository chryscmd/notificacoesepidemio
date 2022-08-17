<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NOTIFICAÇÃO/EPIDEMIO/GPVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <h1><b><font color="blue"><center>Notificação DENGUE/FEBRE DE CHIKUNGUNYA</center></font></b></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <hr>
    <br>
    <input type="submit" value="Notifição Dengue/Chikungunya" onclick="location.href='not.php'">
    <input type="submit" value="Notificar" onclick="location.href='pdf.html'">
    <input type="submit" value="Notificações Abertas" onclick="location.href='notabertas.php'">
    <input type="submit" value="Notificações Finalizadas" onclick="location.href='notfinalizadas.php'"><br><p>
    <form method="POST" action="not.php">
      <label> Data Notificação:</label>
      <input type="date" name:"data" placeholder="Data Notificação"><br><br>
      <label> Nome:</label>
      <input type="text" name:"nome" placeholder="Digite o nome completo"><br><br>
      <label> Cartão Nacional de Saúde (CNS):</label>
      <input type="text" name:"cns" placeholder="Cartão Nacional de Saúde"><br><br>
      <label> CPF:</label>
      <input type="text" name:"cpf" value:"___.___.____-__" placeholder="Digite o cpf"><br><br>
      
      <input type="submit" value="Notificar" onclick="location.href='notificar.php'">
    </form>
  </body>
</html>