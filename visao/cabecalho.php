 <body>
  
  <style type="text/css">
#backtopo {
    display: scroll;
    position: fixed;
    top: 30px;
    right: 10px;
}
</style>


<script>
$(document).ready(function(){
    
    // hide #back-top first
    $('#backtopo').hide();
       
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('#backtopo').fadeIn();
            } else {
                $('#backtopo').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#backtopo').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});
</script>
  
<div id="tudo" style="background-color: #A97FBD">

       
<div class="m">
  <div class="row">
  <div class="columns">
    <ul class="dropdown menu" style="border-color:#A97FBD" data-dropdown-menu>
      <li>
        <a href="#Item-2"><i class="fi-list" style="color:black;font-size:20px;padding:1%;"></i></a>
        <ul class="menu">
          <li>
            
<div class="row">
  <div class="columns">
    <ul class="dropdown menu" data-dropdown-menu>
       <li>
        <a href="#Item-2">Infantil</a>
         <ul class="dropdown menu" data-dropdown-menu>
      <li>
        <a href="#Item-2">Calçados</a>
        <ul class="menu">
          <li><a href="#Item-2A">Tênis</a></li>
          <li><a href="#Item-2B">Sandálias</a></li>
          <li><a href="#Item-2A">Sapatos</a></li>
          <li><a href="#Item-2B">Sapatilhas</a></li>
          <li><a href="#Item-2A">Chinelos</a></li>
          <li><a href="#Item-2B">Botas</a></li>
        </ul>
      </li>
      <li>
        <a href="#Item-2">Roupas</a>
        <ul class="menu">
          <li><a href="#Item-2A">Conjuntos</a></li>
          <li><a href="#Item-2B">Blusas e Camisetas</a></li>
           <li><a href="#Item-2A">Vestidos</a></li>
          <li><a href="#Item-2B">Pijamas e Camisolas</a></li>
           <li><a href="#Item-2A">Fantasias</a></li>
          <li><a href="#Item-2B">Calças</a></li>
        </ul>
      </li>
       <li>
        <a href="#Item-2">Acessórios</a>
        <ul class="menu">
          <li><a href="#Item-2A">Bonés e Chapéus</a></li>
          <li><a href="#Item-2B">Óculos de sol</a></li>
           <li><a href="#Item-2A">Cintos</a></li>
          <li><a href="#Item-2B">Mochilas</a></li>
        </ul>
      </li>
    </ul>
      </li>
      <li>
        <a href="#Item-2">Masculino</a>
        <ul class="dropdown menu" data-dropdown-menu>
      <li>
        <a href="#Item-2">Calçados</a>
        <ul class="menu">
          <li><a href="#Item-2A">Chinelos</a></li>
          <li><a href="#Item-2B">Sapatênis</a></li>
          <li><a href="#Item-2A">Tênis</a></li>
          <li><a href="#Item-2B">Sapato Social</a></li>
          
        </ul>
      </li>
      <li>
        <a href="#Item-2">Roupas</a>
        <ul class="menu">
          <li><a href="#Item-2A">Bermudas</a></li>
          <li><a href="#Item-2B">Camisetas</a></li>
          <li><a href="#Item-2A">Moletom</a></li>
          <li><a href="#Item-2B">Polos</a></li>
            <li><a href="#Item-2B">Calças</a></li>
            <li><a href="#Item-2B">Camisas</a></li>
        </ul>
      </li>
       <li>
        <a href="#Item-2">Acessórios</a>
        <ul class="menu">
          <li><a href="#Item-2A">Óculos de Sol</a></li>
          <li><a href="#Item-2B">Relógios</a></li>
           <li><a href="#Item-2A">Bonés</a></li>
          <li><a href="#Item-2B">Cintos</a></li>
        </ul>
      </li>
    </ul>
  </li>
      <li>
        <a href="#Item-2">Feminino</a>
        <ul class="dropdown menu" data-dropdown-menu>
      <li>
        <a href="#Item-2">Calçados</a>
        <ul class="menu">
          <li><a href="#Item-2A">Rasteirinhas</a></li>
          <li><a href="#Item-2B">Tênis</a></li>
           <li><a href="#Item-2A">Sapatos</a></li>
          <li><a href="#Item-2B">Chinelos</a></li>
        </ul>
      </li>
      <li>
        <a href="#Item-2">Roupas</a>
        <ul class="menu">
          <li><a href="#Item-2A">Vestidos</a></li>
          <li><a href="#Item-2B">Calças</a></li>
           <li><a href="#Item-2A">Blusas</a></li>
          <li><a href="#Item-2B">Saias</a></li>
           <li><a href="#Item-2A">Bodys</a></li>
          <li><a href="#Item-2B">Macacões e Macaquinhos</a></li>
        </ul>
      </li>
       <li>
        <a href="#Item-2">Acessórios</a>
        <ul class="menu">
          <li><a href="#Item-2A">Bolsas</a></li>
          <li><a href="#Item-2B">Relógios</a></li>
           <li><a href="#Item-2A">Bijuterias</a></li>
          <li><a href="#Item-2B">Lenços</a></li>
        </ul>
      </li>
    </ul>
      </li>
    </ul>
  </div>
</div>
            </li>
        </ul>
      </li>
    </ul>
  </div>
</div>


</div>
<div class="" style="padding:3%;width:28%;">
  <input id="barra_pesquisa" type="text" placeholder = " Pesquisa..." style="margin:0px;" >
</div>
<div class="e">
  <p style="text-align:center;"><a href="#"><img src="publico/img/logo.png"></a></p>
</div>
<div class="e">
  <a href="login.html"><p id= "icon_Minha_conta" style="color:black;font-size:25px;text-align:center;padding:1%;"><i class="fi-torso" style="margin-right:10px;"></i>Minha Conta</p></a>
</div>
<div class="m">
  <a href="carrinho.html"><p id= "icon_carrinho" style="color: black" ><i style="font-size:40px" class="fi-shopping-cart"></i></p></a>
</div>
</div> 
          </div>

          <div id="subtopo_inicial">
            
          </div>
      
      
<br>

<div class="row">
<fieldset class="Produtos" style="border-top: 1px solid #333;border-bottom: none; border-left: none;border-right: none;display: block;text-align: center;">
    <legend style="padding: 5px 10px;"><h1 class="titulo">Ofertas Imperdíveis</h1></legend>
</fieldset>  
<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="imagens/banner.jpg" style="width:100%;height:230px;">
  <img class="mySlides" src="imagens/banner1.png" style="width:100%;height:230px;">
  <img class="mySlides" src="imagens/banner2.jpg" style="width:100%;height:230px;">
  <img class="mySlides" src="imagens/banner3.jpg" style="width:100%;height:230px;">
  <div class="w3-center w3-container w3-section w3-large w3-text-black w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-pink" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-pink" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-pink" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-pink" onclick="currentDiv(4)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>


<br>

<div class="row">
 <fieldset class="Produtos" style="border-top: 1px solid #333;border-bottom: none; border-left: none;border-right: none;display: block;text-align: center;">
    <legend style="padding: 5px 10px;"><h1 class="titulo">Principais Produtos</h1></legend>
</fieldset>  
 </div> 
