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
    <div class="youtube">
        <h1>Nosso Podcast</h1>
        <hr>
        <div class="previas">
            <div>
                <a>
                <form action="pod.php" method="POST">    
                    <img name="previa" src="https://img.icons8.com/ios/512/no-image.png">
                    <input type="text" name="previaT" placeholder="Título do vídeo" required />
                    <input type="text" name="url" placeholder="URL do vídeo" required />
                    <button name="add">Adicionar</button>
                </form>    
                </a>                
            </div> 
            <div>
                <a>
                <form action="pod1.php" method="POST">    
                    <img name="previa" src="img/podcast.jpg">
                    <input type="text" name="previaT" value='SERÁ QUE A "IGREJA" ESTÁ PERDENDO PARA O TRAFICANTE?' required />
                    <input type="text" name="url" placeholder="URL do vídeo" value="https://youtu.be/N4O1TCXkBIU" required />
                </form>    
                </a>                
            </div>   
            <div>
                <a>
                <form action="pod2.php" method="POST">    
                    <img name="previa" src="img/podcast2.jpg">
                    <input type="text" name="previaT" value="CADÊ O DEUS DO SALMO 23?" required />
                    <input type="text" name="url" placeholder="URL do vídeo" value="https://youtu.be/fVvf5V0pREw" required />
                </form>     
                </a>                
            </div> 
            <div>
                <a>
                <form action="pod3.php" method="POST">      
                    <img name="previa" src="img/podcast3.jpg">
                    <input type="text" name="previaT" value="MINHA MÃE, MINHA REFERÊNCIA" required />
                    <input type="text" name="url" placeholder="URL do vídeo" value="https://youtu.be/ltae-Rm1As8" required />
                </form>     
                </a>                
            </div>   
            <div>
                <a>
                <form action="pod4.php" method="POST">    
                    <img name="previa" src="img/podcast4.jpg">
                    <input type="text" name="previaT" value="CHIQUINHO DOS SANTOS - RESPOSTA DE MARCINHO EX SOWETO" required />
                    <input type="text" name="url" placeholder="URL do vídeo" value="https://youtu.be/P74wciXHZu0" required />
                </form>    
                </a>                
            </div> 
        </div>  
        <hr>
        <div class="canal">
            <a href="https://youtube.com/@SextoucomPU">
                <img name="previa" src="img/canal.png">
            </a>  
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
.youtube {
    width:          60%;
    margin-top:     -5%;
    margin-left:    auto;
    margin-right:   auto;
    padding:        0% 0% 0% 0%;
/*    padding:        10% 0%;*/
    text-align:     center;
    border:         1px white solid;
    border-radius:  5px;
}  
.youtube h1 {
    margin-top:     0px;
    margin-bottom:  -5px;
    font-family:    Righteous;
    font-size:      25px;
    text-transform: uppercase;
    color:          white;
}
.youtube h2 {
    margin-top:     -5px;
    margin-bottom:  0px;
    font-family:    arial;
    font-size:      20px;
    color:          white;
}    
.youtube div {
    display:        flex;
    width:          90%;
    margin-left:    auto;
    margin-right:   auto;
    margin-bottom:  1%;
    overflow-x:     auto;
}
.previas div {
    min-width:      225px;
    max-width:      225px;
    width:          225px;
    margin-left:    1%;
    margin-right:   1%;
    border:         1px white solid;
    border-radius:  5px;
}
.previas div a {
    text-decoration:none;
}      
.previas div img {
    width:          100%;
    height:         100px;
    background:     grey;
}  
.previas div p {
    width:          100%;
    margin-top:     0px;
    font-family:    arial;
    font-size:      14px;
    color:          white;
}
.previas div input {
    width:          95%;
    margin-top:     0px;
    font-family:    arial;
    font-size:      14px;
    border:         1px black solid;
    border-radius:  5px;
    color:          black;
}   
.previas div button {
    width:          100px;
    margin-top:     10px;
    margin-bottom:  5px; 
    padding:        2px 0px;
    font-family:    arial;
    font-size:      14px;
    border:         1px white solid;
    border-radius:  5px;
    color:          white;
    background:     #5392c9;
}     
.canal img {
     width:          100%;
}    

</style>    
    
</body>    
</html>    