<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<title>Igreja P.U</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    
</head>    
    
<body>
    
<div class="header">
    <div class="paginas">
        <a href="index.php">início</a>
        <a href="podcast.php">podcast</a>
        <a href="noticias.php">notícias</a>
        <a href="contato.php">contate-nos</a>
    </div>
    <div class="formulario">
    <form action="envia.php" method="POST">
        <h1>Informe-nos seu contato</h1>
        <hr>
        <p>Está precisando de uma oração? Preencha as informações abaixo, que oraremos por você!</p>
        <input type="" name="nome" placeholder="Nome" required />
        <input type="" name="telefone" placeholder="Número telefone" required />
        <input type="" name="email" placeholder="E-mail" required />
        <textarea name="mensagem" rows="5" placeholder="Mensagem"></textarea><br>
        <button name="envia">Enviar</button>
    </form>   
    </div>
    <div class="contatos">
        <div class="phone">
            <img src="img/phone.png"><br>
            <a>whatsapp: +55 11 97034-2212</a>  
        </div>
        <div class="mail">
            <img src="https://www.whbrasil.org/wp-content/uploads/2019/09/Icone-email-1-preto.png"><br>      
            <a>plenitudedauncao.pu@gmail.com</a>
        </div>    
    </div>
</div>
    
<style>
body {
    margin:         0;
    padding:        0;
    width:          100%;
    height:         100%;
    background:     url("img/mobile-bg.png") no-repeat;
    Background-size: 100%;
}  
.header {
/*    position:   absolute;*/
    min-width:      100%;
    max-width:      100%;
    width:          100%;
    height:         100%;
/*
    background:     url("img/mobile-bg.png") no-repeat;
    Background-size: 100%;
*/
}
.topo {
    width:          100%;
    height:         100%;
}
.paginas {
    width:          100%;
    padding:        8% 0%;
    text-align:     center;
}
.paginas a {
    padding:        0px 2%;
    font-family:    arial;
    font-size:      20px;
    text-transform: uppercase;
    text-decoration:none;
    color:          white;
}    
.formulario {
    width:          60%;
    margin-top:     -5%;
    margin-left:    auto;
    margin-right:   auto;
    padding:        0% 0% 1% 0%;
/*    padding:        10% 0%;*/
    text-align:     center;
    border:         1px white solid;
    border-radius:  5px;
}  
.formulario h1 {
    margin-top:     0px;
    margin-bottom:  -5px;
    font-family:    Righteous;
    font-size:      25px;
    text-transform: uppercase;
    color:          white;
}
.formulario p {
    margin-top:     0px;
    font-family:    arial;
    font-size:      16px;
    color:          white;
}
.formulario input {
    width:          50%;
    margin-top:     0px;
    margin-left:    auto;
    margin-right:   auto;
    margin-bottom:  10px;
    font-family:    arial;
    font-size:      20px;
    border:         none;
    border-radius:  5px;
    color:          black;
}    
.formulario textarea {
    width:          50%;
    margin-top:     0px;
    margin-left:    auto;
    margin-right:   auto;
    margin-bottom:  15px;
    font-family:    arial;
    font-size:      20px;
    border:         none;
    border-radius:  5px;
    color:          black;
}    
.formulario button {
    padding:        10px 40px;
    font-family:    arial;
    font-size:      22px;
    text-decoration:none;
    border:         none;
    border-radius:  50px;
    color:          black;
    background:     white;
}
.contatos {
    width:          60%;
    margin-top:     2%;
    margin-left:    auto;
    margin-right:   auto;
}
.phone {
    width:          50%;
    height:         45px;
    text-align:     center;
}   
.phone img{
    width:          20px;
}       
.mail {
    width:          50%;
    height:         45px;
    margin-top:     -45px;
    margin-left:    auto;
    text-align:     center;
}    
.mail img{
    width:          20px;
}
.contatos a {
    font-family:    Righteous;
    font-size:      16px;
    text-decoration:none;
    color:          white;
}  
</style>    
    
</body>    
</html>    