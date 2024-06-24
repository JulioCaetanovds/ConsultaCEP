```
# Consulta de CEP

Este é um programa em PHP que consulta informações de endereço a partir de um CEP (Código de Endereçamento Postal) utilizando a API ViaCEP. 

## Funcionalidades

- Solicita ao usuário um CEP.
- Envia o CEP informado para a API ViaCEP.
- Exibe as informações do endereço de forma adequada.
- Trata e apresenta corretamente os erros possíveis na consulta à API.

## Pré-requisitos

- PHP 7.4 ou superior.
- Acesso à internet para realizar consultas à API ViaCEP.

## Como Executar

1. Clone este repositório para o seu ambiente local:
   ```sh
   git clone https://github.com/seu-usuario/consulta-cep.git
   ```

2. Navegue até o diretório do projeto:
   ```sh
   cd consulta-cep
   ```

3. Execute o script PHP:
   ```sh
   php ConsultaCEP.php
   ```

4. Digite um CEP (apenas números) quando solicitado.

## Exemplo de Uso

```sh
$ php ConsultaCEP.php
Consulta de CEP
Digite um CEP (apenas números): 01001000
CEP: 01001-000
Logradouro: Praça da Sé
Complemento: lado ímpar
Bairro: Sé
Localidade: São Paulo
UF: SP
IBGE: 3550308
GIA: 1004
DDD: 11
SIAFI: 7107
```

## Estrutura do Projeto

```
consulta-cep/
│
├── ConsultaCEP.php
└── README.md
```

## API Utilizada

- [ViaCEP](https://viacep.com.br): Webservice gratuito de alto desempenho para consulta de Código de Endereçamento Postal (CEP) do Brasil.

## Tratamento de Erros

- CEPs com formato inválido resultam em um código de status 400 (Bad Request) e exibem a mensagem "Formato de CEP inválido ou erro ao consultar o CEP".
- CEPs válidos mas inexistentes na base de dados da API exibem a mensagem "CEP não encontrado".

## Licença

Este projeto é distribuído sob a licença MIT. Consulte o arquivo `LICENSE` para obter mais informações.
