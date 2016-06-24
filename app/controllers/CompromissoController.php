<?php

use Phalcon\Mvc\Controller;

class CompromissoController extends ControllerBase
{

  public function initialize()
  {
      parent::initialize();
  }

  public function indexAction()
  {
    echo "<form action='../compromisso/listar' method='post'>";
    echo "    <label for='id'>ID:</label>";
    echo "    <input type='text' id='id' value='' name='id' />";
    echo "    <input type='submit' value='Buscar' />";
    echo "</form>";
  }

  public function listarAction($id, $titulo)
  {
    $id = $this->filter->sanitize($id, "int");

    if ($this->request->isPost()) {
      $id = $this->request->getPost('id');
    }
    $compromissos = empty($id) ? Compromisso::find() : Compromisso::findById($id);
    if(count($compromissos))
    {
      foreach ($compromissos as $compromisso) {
          echo json_encode($compromisso);
      }
    } else{
      echo 'Compromisso de id '.$id.' inexistente!!';
    }

  }

  public function adicionarAction($titulo, $descricao)
  {
    $compromisso = new Compromisso();
    $compromisso->titulo = $this->filter->sanitize($titulo, "string");
    $compromisso->descricao = $this->filter->sanitize($descricao, "string");
    $compromisso->save();

    //var_dump($compromisso->getMessages());

    echo "Compromisso {$compromisso->id} adicionado com sucesso!!";
  }

  public function editarAction($id, $titulo, $descricao)
  {
    $compromisso = Compromisso::findFirst($id);
    $compromisso->titulo = $this->filter->sanitize($titulo, "string");
    $compromisso->descricao = $this->filter->sanitize($descricao, "string");
    $compromisso->save();

    var_dump($compromisso->getMessages());
  }

  public function removerAction()
  {
    $id = 2;
    $compromisso = Compromisso::findFirst($id);
    if($compromisso){
      $compromisso->delete();
      echo "Compromisso de id {$id} removido com sucesso!!";
    } else {
      echo "Compromisso de id {$id} inexistente!!";
    }

    //var_dump($compromisso->getMessages());
  }

}
