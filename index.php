<?php
class Figura { //CLASSE
  protected $nome;
  protected $n_lati;
  protected $lunghezza_lato;
  protected $colore;

  public function __construct($nome, $n_lati, $lunghezza_lato, $colore)
  {
    $this->setNome($nome);
    $this->n_lati = $n_lati;
    $this->lunghezza_lato = $lunghezza_lato;
    $this->colore = $colore;
  }

  //setter
  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function setNLati($n_lati) {
    //controllaimo valore input
    //MOLTO BELLO
    if($n_lati < 3) {
      throw new Exception('Numero lati non valido. I lati devono essere > 3');
    }
    $this->n_lati = $n_lati;

    // //BRUTTO
    // if($n_lati >= 3) {
    //   //sovrasciviamo il valore
    //   $this->n_lati = $n_lati;
    // }
    // throw new Exception('Numero lati non valido. I lati devono essere > 3');
  }

  //getter
  public function getNomeColore() {
    // return $this->nome . ' ' . $this->colore;
    return "Nome: {$this->nome}, Colore: {$this->colore}";
    // return 'Nome: {$this->nome}, Colore: {$this->colore}';
  }

  public function calcolaPerimetro() {
    $perimetro = $this->n_lati * $this->lunghezza_lato;

    return $perimetro;
  }
};


class Triangolo extends Figura { //SOTTOCLASSE
  protected $base;
  protected $altezza;

  public function __construct($lunghezza_lato, $colore, $base, $altezza)
  {
    parent::__construct('Triangolo', 3, $lunghezza_lato, $colore);
    $this->base = $base;
    $this->altezza = $altezza;
  }

  public function calcoloArea() {
    $area = ($this->base * $this->altezza) / 2;

    return $area;
  }
}

class Quadrato extends Figura { //SOTTOCLASSE
  protected $base;
  protected $altezza;

  public function __construct($lunghezza_lato, $colore, $base, $altezza)
  {
    parent::__construct('Quadrato', 4, $lunghezza_lato, $colore);
    $this->base = $base;
    $this->altezza = $altezza;
  }

  public function calcoloArea() {
    $area = ($this->base * $this->altezza);

    return $area;
  }
}

// $figuraGenerica = new Figura('Figura Generica', 3, 20, 'rosso');
$triangolo = new Triangolo(20, 'rosso', 20, 20);

var_dump($figuraGenerica);
echo '</br>';
echo '</br>';
var_dump($triangolo);

echo '</br>';
echo '</br>';

echo $figuraGenerica->calcolaPerimetro();
echo '</br>';
echo '</br>';
echo $triangolo->calcolaPerimetro();