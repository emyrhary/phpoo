<?php
//nome classe
class fruta{
    //nome atributos
    public $nome;
    public $cor;

    /*Métodos */
    function __construct($nome, $cor)
    {
        $this->nome = $nome;
        $this->cor = $cor;
    }


    function set_name($nome){
        $this->nome = $nome;
    }
    function set_color($cor){
        $this->cor = $cor;
    }

    //

    function get_name(){
        return $this->nome;
    }
    function get_color(){
        return $this->cor;
    }
};
//palavra new cria um objeto do tipo fruta
$maca = new fruta();
/*atribuindo nome para o meu objeto atraves do metodo set*/
$maca -> set_name ("maca_ifsp");
//o comando abaixo imprimi a var se for publica
// echo $maca -> nome;
//imprimi a var se o atributo for público ou privado 
echo "</br>" . $maca-> get_name();
$maca -> set_color ("vermelho");
echo "</br>" . $maca-> get_color();

?>