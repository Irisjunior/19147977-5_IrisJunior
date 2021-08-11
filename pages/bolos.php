

 
  <h2>Bolos</h2>

  <div class="main">
    <aside class="texto">
    <?php echo $produtos["bolo"]["descricao"]?>
     </aside>

     <div>
       <img class="img-prod" src="./imagens/bolos/<?php echo $produtos["bolo"]["img"];?>"  alt="imagem_de_bolos">
       <div class="botao-valor">R$<?php echo $produtos["bolo"]["preco"]?></div>
       <div class="botao-valor"><button  class="comprar">Comprar</button></div>
     </div>
  </div>



</html>