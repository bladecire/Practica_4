<?php
class Body {
 private $lines=array();
 private $titulo;

public function insertTitle($titulo){
	$this->titulo=$titulo;
}

 public function insertPar($li) {
 	$this->lines[]=$li;
 }

 public function mostrar()
 {
 	echo "<div id='cuerpo'>";
 	echo '<h1>'.$this->titulo.'</h1>';
	 for($f=0;$f<count($this->lines);$f++){
	 	echo '<p>'.$this->lines[$f].'</p>';
	 }
	 echo "</div>";
 }
}
?>