<?php

class assinante{

    private $id;
    private $nomeAssinante;
    private $email;
    private $cpf;
    private $cep;
    private $numero;
    private $endereco;
    private $cidade;
    private $bairro;
    private $uf;
    private $senha;


    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getNomeAssinante() {
        return $this->nomeAssinante;
    }

    function setNomeAssinante($nomeAssinante) {
        $this->nomeAssinante = $nomeAssinante;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function getCep() {
        return $this->cep;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function getNumero() {
        return $this->numero;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function getBairro() {
        return $this->bairro;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function getUf() {
        return $this->uf;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function getSenha() {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
}