<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet"> 
    <link rel="stylessheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Pet Shop</title>

    <style>
  
        .css 

 

*{ 

    margin: 0; 

    padding: 0; 

    font-family: 'Dosis' , sans-serif; 

} 

 body{ 

     background-image: url('dog2.jpg'); 
     background-repeat: no-repeat;
    
 } 

.hero{ 

    width: 90%; 

    margin: auto; 

} 

 

.navbar{ 

    margin: 30px auto; 

    display: flex; 

    align-items: center; 

} 

 

ul{ 

    flex: 1; 

    text-align: right; 

} 

 

ul li { 

    display: inline-block; 

    list-style: none; 

    margin: 0 50px; 

} 

 

ul li a{ 

    text-decoration: none; 

    color: #53c1c8; 

    padding: 0 70px;    

    position: relative;  

    font-size: x-large; 

} 

 

ul li a::after{ 

    content: ''; 

    width: 0; 

    height: 15px; 

    background: #53c1c8; 

    position: absolute; 

    left: 50%; 

    transform: translate(-50%); 

    top: -55px; 

    transition: 0.5s; 

} 

 

ul li a:hover::after{ 

    width: 100%; 

} 

 

.navbar-icons img{ 

    height: 25px; 
    
    margin-right: 100px; 
    
    cursor: pointer; 

} 

 

.navbar-icons{ 

    margin-left: 40px; 

 

} 

 

.banner{ 

    display: flex; 

    margin-top: 80px; 

} 

 

.coluna-esquerda, 

.coluna-direita { 

    flex-basis: 50%; 

} 

 

.coluna-direita img{ 

    width: 50%; 

    border-radius: 10px; 

} 

 

.search-box{ 

    width: 45%; 

    display: flex; 

    padding-bottom: 3px; 

    border-bottom: 1px solid #ddd; 

    margin: 10px 0 30px; 

} 

 

.search-box img{ 

    height: 25px; 

    width: 25px; 

    cursor: pointer; 

     

} 

 

.search-box input{ 

    width: 100%; 

    margin-left: 15px; 

    font-size: 17px; 

    border: 0; 

    outline: none; 

    border-radius: 10px; 

} 

 

.coluna-esquerda h1{ 

    font-size: 100px; 

} 

 

.coluna-esquerda h3{ 

    font-size: 35px; 

} 

 

span{ 

    color: #8bc1e2; 

} 

 

.coluna-esquerda p{ 

    font-size: 14px; 

    color: #999; 

    margin: 50px 0; 

} 

 

.btn button{ 

    padding: 7px 30px; 

    margin-right: 15px; 

    border: 1px solid #8bc1e2; 

    border-radius: 20px; 

    cursor: pointer; 

    color: #8bc1e2; 

    background: transparent;        

} 

 

.btn .btn-1{ 

    background: linear-gradient(#53a1a8, #9CEEE2 ); 

    box-shadow: 0 2px 15px rgba(156, 254, 242); 

    color: #fff; 

} 

 

.btn { 

    margin-bottom: 50px; 

} 

 

.social-icons{ 

    width: 200px; 

    text-align: right; 

    opacity: 1.0; 

    position: relative; 

    margin-left: 10px; 

} 

 

.social-icons img{ 
    position: right;
    height: 25px; 
    cursor: pointer; 
    left: -150px;
    top: 200px;
} 

 

.social-icons::after{ 

    content: ''; 

    width: 120px; 

    height: 1px; 

    background: #000; 

    position: absolute; 

    left: 80px; 

    top: 40px;
} 
    </style>
</head>
<body>

<div class="hero"> 

<div class="navbar"> 

    <img src="pata.png"> 

    <ul> 

        <li><a href="#">Home</a></li> 

        <li><a href="#">Sobre</a></li> 

        <li><a href="#">Loja</a></li> 

    </ul>  
    <div class="navbar-icons"> 

        <img src="bell.png"> 

        <img src="user.png"> 

        <img src="shop.png"> 

    </div> 

</div> 

<div class="banner"> 

    <div class="coluna-esquerda"> 

        <div class="search-box"> 

            <img src="search.png"> 

            <input type="text"> 

        </div> 

        <h1>PET<span>SHOP</span></h1> 

        <h3><span>Sempre buscando</span> conforto aos PETS</h3> 

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione accusamus  

            <br>natus dolore voluptatem molestias quidem? 

        </p> 

        <div class="btn"> 

            <button type="button" class="btn-1">Horários</button> 

            <button type="button">Contate-nos</button> 

        </div> 

        <div class="social-icons"> 

            <img src="twitter.png" width="30" height="30"> 

            <img src="instagram.png" width="30" height="30"> 

            <img src="pinterest.png" width="30" height="30"> 

            <img src="facebook.png" width="30" height="30"> 

        </div> 

    </div> 

    <div class="coluna-direita"> 

        <img src=""> 

    </div> 

</div> 

</div> 

</body> 

</html> 