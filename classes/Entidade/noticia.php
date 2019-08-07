<?php

class noticia{

    private $titulo;
    private $dataNoticia;
    private $resumo;
    private $imagem;
    private $conteudo;
    private $destaque;

    function getTitulo(){
        return $this->titulo;
    }

    function setTitulo(){
        $this->titulo = $titulo;
    }

    function getDataNoticia(){
        return $this->dataNoticia;
    }

    function setDataNoticia(){
        $this->dataNoticia = $dataNoticia;
    }

    function getResumo(){
        return $this->resumo;
    }

    function setResumo(){
        $this->resumo = $resumo;
    }

    function getImagem(){
        return $this->imagem;
    }

    function setImagem(){
        $this->imagem = $imagem;
    }

    function getConteudo(){
        return $this->conteudo;
    }

    function setConteudo(){
        $this->conteudo = $conteudo;
    }

    function getDestaque(){
        return $this->destaque;
    }

    function setDestaque(){
        $this->destaque = $destaque;
    }

}