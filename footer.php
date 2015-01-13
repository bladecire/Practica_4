<?php

class foot {
 private $marca,$url;

public function newFooter($marca,$url) {
	$this->marca=$marca;
	$this->url=$url;
}

 public function mostrar()
 {
 echo "<footer>";
 echo "<a href=".$this->url." id='enlace'>".$this->marca."</a> &copy Todos los derechos reservados.";
 echo "</footer>";
 
 }
}

?>