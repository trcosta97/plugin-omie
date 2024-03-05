<?php

class Omie_Conta {
    public $identificacao;
    public $endereco;
    public $telefone_email;

    public function __construct($identificacao, $endereco, $telefone_email) {
        $this->identificacao = $identificacao;
        $this->endereco = $endereco;
        $this->telefone_email = $telefone_email;
    }

    public function to_json() {
        $data = array(
            'identificacao' => $this->identificacao,
            'endereco' => $this->endereco,
            'telefone_email' => $this->telefone_email
        );
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}

$identificacao = array(
    'cCodInt' => '52149',
    'cNome' => 'Omiexperience S/A',
    'cObs' => 'Conta adicionada via API',
    'dDtReg' => '05/03/2024',
    'dDtValid' => '18/04/2024'
);

$endereco = array(
    'cEndereco' => 'Av. Dr. Chucri Zaidan, 1550',
    'cCEP' => '04583-110',
    'cCidade' => 'SAO PAULO',
    'cUF' => 'SP',
    'cPais' => 'Brasil'
);

$telefone_email = array(
    'cDDDTel' => '11',
    'cNumTel' => '5171-8888',
    'cEmail' => 'ajuda@omie.com.br',
    'cWebsite' => 'http://www.omie.com.br/'
);


?>
