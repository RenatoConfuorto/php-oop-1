<?php
class Student
{
  public $name;
  public $lastName;
  private $id;
  private $grades;

  function __construct($_name, $_lastName){
    $this->name = $_name;
    $this->lastName = $_lastName;
    $this->grades = [];
    $this->id = strtolower($this->name) . strtolower($this->lastName);
  }

  public function addGrade($_subject, $_grade){
    $this->grades[$_subject] = $_grade;
  }

}



$class = [];

$pippo = new Student('pippo', 'franco');
$class[] = $pippo;
$tizio = new Student('tizio', 'caio');
$class[] = $tizio;
$guglielmo = new Student('guglielmo', 'andreotti');
$class[] = $guglielmo;

//voti
$guglielmo->addGrade('Matematica', 10);
$pippo->addGrade('Matematica', 10);
$tizio->addGrade('Matematica', 10);
$guglielmo->addGrade('Educazione Fisica', 10);
$guglielmo->addGrade("Storia Dell'Arte", 10);
$pippo->addGrade('Italiano', 10);
$pippo->addGrade('Latino', 10);
$tizio->addGrade('Filosofia', 10);
$tizio->addGrade('Inglese', 10);
// var_dump($class);

//variabili aggiunta studente

$studentName = $_POST['name'];
$studentLastName = $_POST['last-name'];

//variabili aggiunta voto
$studentSelectedID = $_POST['student'];
$studentGrade = $_POST['grade'];