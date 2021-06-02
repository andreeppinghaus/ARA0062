<?php

/**
 * sdasd dasdasdsa dsad
 * sdasdjkasjasdjaskasd
 * 
 */
class ProdutoQuarta {
    
    private $id;
    
    /**
     * sdmasnsa asjsahjs ashjsgshsasda sads s sda
     * @var string
     */
    private $titulo;
    private  $descricao, $url, $codigo_barra, $valor;
    private $tabela;
    
    public function __construct($data=null){
       $this->tabela="produto_quarta";
       
       if ( ! empty($data)  ) {
            $this->hydration($data);
       }
        
    }
    
    public function hydration($data) {
        
        if (isset($data["id"])) {
            $this->id = $data["id"];
        }
        if (isset($data["titulo"])) {
            $this->titulo = $data["titulo"];
        }
        if (isset($data["descricao"])) {
            $this->descricao = $data["descricao"];
        }
        if (isset($data["url"])) {
            $this->url = $data["url"];
        }
        if (isset($data["codigo_barra"])) {
            $this->codigo_barra = $data["codigo_barra"];
        }
        if (isset($data["valor"])) {
            $this->valor = $data["valor"];
        }
    }
    
    function getInsert() {
        $sql = "insert into ".$this->tabela." (titulo,descricao,url,codigo_barra,valor) 
        values ('".$this->titulo."','".$this->descricao."','".$this->url."','".
        $this->codigo_barra."',".$this->valor.")";
        
        return $sql;
    }
    function getUpdate() {
        return "update ".$this->tabela.
                " set titulo='".$this->titulo."', descricao='".$this->descricao."', ".
                "url='".$this->url."', codigo_barra='".$this->codigo_barra."', ".
                "valor = ".$this->valor.
                " where id = ".$this->id;
    }
    function getDelete() {
        return "delete  from ".$this->tabela.
                " where id = ".$this->id;
    }
    
    function getSelect() {
        $sql = "select * from ".$this->tabela;
    }
    
    function getSelectById($id) {
        return "select * from ".$this->tabela." where id = $id ";
    }
}


?>