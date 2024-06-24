<?php

function consultarCep($cep) {
    $url = "https://viacep.com.br/ws/{$cep}/json/";

    // Inicializa o cURL
    $ch = curl_init($url);

    // Configurações do cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Executa a requisição
    $response = curl_exec($ch);

    // Verifica erros no cURL
    if ($response === false) {
        echo "Erro ao consultar o CEP: " . curl_error($ch);
        curl_close($ch);
        return;
    }

    // Fecha o cURL
    curl_close($ch);

    // Converte a resposta para array
    $dados = json_decode($response, true);

    // Verifica se houve erro na consulta
    if (isset($dados['erro'])) {
        echo "CEP não encontrado.\n";
    } elseif (isset($dados['cep'])) {
        // Exibe as informações do endereço
        echo "CEP: " . $dados['cep'] . "\n";
        echo "Logradouro: " . $dados['logradouro'] . "\n";
        echo "Complemento: " . $dados['complemento'] . "\n";
        echo "Bairro: " . $dados['bairro'] . "\n";
        echo "Localidade: " . $dados['localidade'] . "\n";
        echo "UF: " . $dados['uf'] . "\n";
        echo "IBGE: " . $dados['ibge'] . "\n";
        echo "GIA: " . $dados['gia'] . "\n";
        echo "DDD: " . $dados['ddd'] . "\n";
        echo "SIAFI: " . $dados['siafi'] . "\n";
    } else {
        echo "Formato de CEP inválido ou erro ao consultar o CEP.\n";
    }
}

function main() {
    echo "Consulta de CEP\n";
    echo "Digite um CEP (apenas números): ";
    $cep = trim(fgets(STDIN));
    consultarCep($cep);
}

// Executa o programa
main();

?>
