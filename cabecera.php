<?php
class HeadPage {
	private $titulo;
	private $subtitulo;

	public function newLogo($titulo,$subtitulo) {
		$this->titulo=$titulo;
		$this->subtitulo=$subtitulo;
	}

 public function mostrar()
 {

	echo '<header>';
		echo '<div id="logo"><span>'.$this->titulo.'</span><strong>'.$this->subtitulo.'</strong></div>';
	echo '</header>';
 }
}
?>