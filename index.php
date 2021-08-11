<?php 

//inclusao dos dados
include 'dados/dados.php';
//inclusao do header
include "pages/header.php";

//$pagina = 'home';

(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina ='home';


if (file_exists('pages/'.$pagina . '.php')):
  include ('pages/' . $pagina . '.php');
  else :
    include ('pages/home.php');
  endif;  


// inclusao do footer
include "pages/footer.php";
?>
