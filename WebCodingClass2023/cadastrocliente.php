<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exibircliente.php" 
method="POST">
    <!-- comentário -->
    Nome:
    <input type="text" class="cxnome" name="cxnome"> <br/>
    Idade:
    <input type="number"  class="cxidade" name="cxidade"><br/>
    E-mail:
    <input type="email" class="cxemail" name="cxemail"><br/>
    Data de nascimento:
    <input type="date" class="cxdata" name="cxdata"><br/>
    Filhos:
    <input type="radio" class="ops" name="ops" value="S">SIM
    <input type="radio" class="ops" name="ops" value="N">Não <br/>
    <input type="submit" class="btngravar" value="Gravar">
</form>
</body>
</html>