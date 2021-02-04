<?php
class Item
{
    //  __construct(){

    // }
    private $item;
    private $quantidad,$descricao,$status;

    /**
     * Get the value of quantidad
     */ 
    public function getQuantidad()
    {
        return $this->quantidad;
    }

    /**
     * Set the value of quantidad
     *
     * @return  self
     */ 
    public function setQuantidad($quantidad)
    {
        $this->quantidad = $quantidad;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of item
     */ 
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set the value of item
     *
     * @return  self
     */ 
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    public function carregar($arr)
    {
        $this->setItem($arr['item']);
        $this->setQuantidad($arr['quantidade']);
        $this->setDescricao($arr['descricao']);
        $this->setStatus($arr['status']);
    }
    public function salvar($obj)
    {

    }
}
?> 