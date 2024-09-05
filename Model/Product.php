<?php 

require_once __DIR__.'/Category.php';

class Product {
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;
    public $tipoArticolo;

    public function __construct($nome, $prezzo, $immagine, Categoria $categoria, $tipoArticolo) {
        $this->nome = $nome;
        $this->prezzo  = $prezzo ;
        $this->immagine = $immagine;
        $this->categoria  = $categoria ;
        $this->tipoArticolo  = $tipoArticolo ;

    }

    public function getDettagli() {

        return [
           'nome' => $this->nome,
           'prezzo' => $this->prezzo,
           'immagine' => $this->immagine,
           'categoria' => $this->categoria->getNome(),
           'icona' => $this->categoria->getIcona(),
           'tipo' => $this->tipoArticolo,


        ];

    }




}

