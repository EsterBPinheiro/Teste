<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_POST["cxnome"];
        $idade = $_POST["cxidade"];
        $email = $_POST["cxemail"];
        $datanasc = $_POST["cxdata"];
        $filhos = $_POST["ops"];
        echo "Nome: " . $nome . "<br/>";
        echo "Idade: " . $idade . "<br/>";
        echo "E-mail:"  . $email . "<br/>";
        echo "Data de nascimento: " .$datanasc."<br/>";
        echo "Tem Filhos: " . $filhos . "<br/>";
     ?>
     <h1>Exibir pelo formulário</h1>
<form>
    Nome:
    <input type="text" disabled="true" value="<?php echo $nome=$_POST["cxnome"];?>"><br/>
    E-mail:
    <input type="text" value="<?php echo $email=$_POST["cxemail"]?>"><br/>    
</form>   
</body>
</html>