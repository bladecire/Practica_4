<!DOCTYPE html>
<html lang="ca">
<head>
 <title>Práctica de POO - Eric</title>
 <meta charset="utf-8"/>
 <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="content">
<?php

include_once("cabecera.php");
include_once("menu.php");
include_once("body.php");
include_once("footer.php");

class Page {

 public function __construct()
 {
 $this->cap=new HeadPage();

 $this->menu = new Menu();
 $this->body=new Body();
 
 $this->foot=new foot();
 }

public function addLogo($titulo,$subtitulo){
	$this->cap->newLogo($titulo,$subtitulo);
}

public function addMenuItem($enlace,$texto){
	$this->menu->newMenuItem($enlace,$texto);
}

public function insertTituloBody($titulo){
	$this->body->insertTitle($titulo);
}


 public function insertBody($text)
 {
 $this->body->insertPar($text);
 }

 public function insertFooter($marca,$url)
 {
 $this->foot->newFooter($marca,$url);
 }

 public function mostrar()
 {
 $this->cap->mostrar();
 $this->menu->mostrar();
 $this->body->mostrar();
 $this->foot->mostrar();
 }
}

$pagina1=new Page('Títol de la Pagina','Peu de la página');

$pagina1->addLogo("M7 - P4","Jugando con objetos");

$pagina1->addMenuItem("http://www.enlace1.com","Nines");
$pagina1->addMenuItem("http://www.enlace2.com","Figures d'acció");
$pagina1->addMenuItem("http://www.enlace3.com","Construcció");
$pagina1->addMenuItem("http://www.enlace4.com","Videojocs");
$pagina1->addMenuItem("http://www.enlace5.com","Jocs");

$pagina1->insertTituloBody("Novetats 2014 made in Gavà!");
$pagina1->insertBody("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
$pagina1->insertBody("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
$pagina1->insertBody("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");

$pagina1->insertFooter("La web de Eric","http://lawebdeeric.com");

$pagina1->mostrar();
?>
</div>



</body>
</html>