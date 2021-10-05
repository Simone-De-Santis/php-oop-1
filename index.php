<!-- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza (proprietà)
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà, se possibile cerchiamo di stampare senza ricorrere a var_dump
-->
<?php
// creazione classe  
class Movie
{
    public $id;
    public $original_title;
    public $original_language;
    public $overview;
    public $vote_average;
    public $my_judment;


    public function saluta()
    {
        echo 'io sono la funzione di ' . $this->original_title . "</br>";
        echo 'il mio voto è ' . $this->vote_average . "</br>";
    }


    //? questa funzione restituisce un valore che va stampato ->>>>>
    // !segui il rosso _-_-_->>
    public function getMyJudment()
    {
        if ($this->vote_average > 6) {
            $this->my_judment = 'troppo bello ';
        } else {
            $this->my_judment = 'troppo brutto ';
        }
        return $this->my_judment;
    }
}

// instance class 
// instance 1
$pluto = new Movie();
$pluto->id = "99999";
$pluto->original_title = "Il signore degli anelli ";
$pluto->original_language = "it";
$pluto->overview = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta maxime molestiae architecto ad dolorem cumque iste in eum rerum illo. Laboriosam dolor hic suscipit officia expedita a illo maxime necessitatibus.";
$pluto->vote_average = 5;
//! chiamo la funzione che verrà stampata grazie al var_dump
$pluto->getMyJudment();

// instance 2
$paperino = new Movie();
$paperino->id = "11111";
$paperino->original_title = "The Matrix";
$paperino->original_language = "it";
$paperino->overview = "Consectetur adipisicing elit. Dicta maxime molestiae architecto ad dolorem cumque iste in eum rerum illo. Laboriosam dolor hic suscipit officia expedita a 'So Lillo'.";
$paperino->vote_average = 9;
//! chiamo la funzione che verrà stampata grazie al var_dump
$paperino->getMyJudment();

var_dump($pluto);
var_dump($paperino);
$pluto->saluta();
$paperino->saluta();

echo 'il nome del mio film preferito è : ' . $paperino->original_title . "</br>";
echo 'il mio giudizio sul film è : ' . $paperino->getMyJudment() . "</br>";


?>