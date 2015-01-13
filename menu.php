<?php
class Menu {
	private $enlaces = array();
	private $textos = array();


 public function newMenuItem($enlace,$texto) {
 	$this->enlaces[]=$enlace;
 	$this->textos[]=$texto;
 }

 public function mostrar()
 {
 	echo "<nav id='menu'><ul>";
	 for($f=0;$f<count($this->enlaces);$f++){
	 	echo '<li><a href="'.$this->enlaces[$f].'"><span>'.$this->textos[$f].'</span></a></li>';
	 }
	 echo "</ul></nav>";
 }
}
?>
