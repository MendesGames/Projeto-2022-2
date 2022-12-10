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
        <a href="noticia.php">notícias</a>
        <a href="contato.php">contate-nos</a>
    </div>
    <div class="noticia">
        <h1>Nossas Notícias</h1>
        <hr>
        
        <div class="noticias">
            <div>
                <a>
                <form action="not.php" method="POST">    
                    <input type="text" name="noticiaT" placeholder="Título da notícia" required />
                    <img name="noticia" src="https://img.icons8.com/ios/512/no-image.png">
                    <textarea name="descricao" rows="8"></textarea>
                    <button name="add">Adicionar</button>
                </form>    
                </a>                
            </div>
            <div>
                <a>
                <form action="not.php" method="POST">      
                    <input type="text" name="noticiaT" placeholder="Título da notícia" value="Holanda x Argentina" required />
                    <img name="noticia" src="img/noticia1.jpg">
                    <textarea name="descricao" rows="8">Em uma partida tensa e repleta de embates além das disputas de bola, a vitória da Argentina nos pênaltis sobre a Holanda, depois de empate por 2 a 2 após 120 minutos de partida, terminou com provocação direta aos adversários ainda no gramado.</textarea>
                    <button name="salvar1">Salvar</button>
                </form>    
                </a>                
            </div>
            <div>
                <a>
                <form action="not.php" method="POST">      
                    <input type="text" name="noticiaT" placeholder="Título da notícia" value="Neymar não cumpre promessa a Bolsonaro" required />
                    <img name="noticia" src="img/noticia2.jpg">
                    <textarea name="descricao" rows="8">Neymar não cumpriu a promessa que fez ao presidente Jair Bolsonaro (PL) durante a campanha eleitoral no Brasil: dedicar a ele seu primeiro gol na Copa do Mundo do Catar.</textarea>
                    <button name="salvar2">Salvar</button>
                </form>      
                </a>                
            </div>    
            <div>
                <a>
                <form action="not.php" method="POST">      
                    <input type="text" name="noticiaT" placeholder="Título da notícia" value="Novo ministro da Fazenda de Lula" required />
                    <img name="noticia" src="img/noticia3.jpg">
                    <textarea name="descricao" rows="8">O ex-prefeito da cidade de São Paulo Fernando Haddad (PT) foi anunciado como ministro da Fazenda (atualmente chamado de Ministério da Economia) para o próximo mandato do presidente eleito Luiz Inácio Lula da Silva (PT). Haddad, que já era cotado para a pasta desde a vitória do petista nas eleições, foi ministro da Educação durante as gestões de Lula e Dilma Rousseff, entre 2005 e 2012. Ele também disputou a reeleição na prefeitura de SP em 2016, as eleições presidenciais de 2018 e se candidatou para o governo de São Paulo em 2022 – acabou derrotado nas três disputas.</textarea>
                    <button name="salvar3">Salvar</button>
                </form>    
                </a>                
            </div>    
            <div>
                <a>
                <form action="not.php" method="POST">      
                    <input type="text" name="noticiaT" placeholder="Título da notícia" value="Ministro da Defesa de Lula" required />
                    <img name="noticia" src="img/noticia4.jpg">
                    <textarea name="descricao" rows="8">O presidente eleito Luiz Inácio Lula da Silva (PT) anunciou José Múcio Monteiro como ministro da Defesa para o próximo governo nesta sexta-feira (9). Múcio tem longa carreira política e já foi ministro no segundo mandato do petista, entre 2007 e 2009. Além disso, ocupou a presidência do Tribunal de Contas da União (TCU).</textarea>
                    <button name="salvar4">Salvar</button>
                </form>      
                </a>                
            </div>   
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
.noticia {
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
.noticia h1 {
    margin-top:     0px;
    margin-bottom:  -5px;
    font-family:    Righteous;
    font-size:      25px;
    text-transform: uppercase;
    color:          white;
} 
.noticia div {
    display:        flex;
    width:          90%;
    margin-left:    auto;
    margin-right:   auto;
    margin-bottom:  1%;
    overflow-x:     auto;
}
.noticias div {
    min-width:      300px;
    max-width:      300px;
    width:          300px;
    height:         400px;
    margin-left:    1%;
    margin-right:   1%;
    overflow-y:     auto;
    border:         1px white solid;
    border-radius:  5px;
}
.noticias div a {
    text-decoration:none;
}   
.noticias div input {
    width:          95%;
    margin-top:     0px;
    margin-bottom:  0px;
    font-family:    arial;
    font-size:      14px;
    border:         1px black solid;
    border-radius:  5px;
    color:          black;
}     
.noticias div textarea {
    width:          95%;
    margin-top:     0px;
    margin-bottom:  0px;
    font-family:    arial;
    font-size:      14px;
    border:         1px black solid;
    border-radius:  5px;
    color:          black;
}      
.noticias div h2 {
    margin-top:     0px;
    margin-bottom:  0px;
    font-family:    arial;
    font-size:      18px;
    color:          white;
    text-align:     center;
}    
.noticias div img {
    width:          100%;
    height:         175px;
}  
.noticias div p {
    margin-top:     0px;
    font-family:    arial;
    font-size:      14px;
    color:          white;
    text-align:     left;
}   
.noticias div button {
    width:          100px;
    margin-top:     15px;
    margin-bottom:  5px; 
    padding:        3px 0px;
    font-family:    arial;
    font-size:      14px;
    border:         1px white solid;
    border-radius:  5px;
    color:          white;
    background:     #5392c9;
}      
</style>    
    
</body>    
</html>    