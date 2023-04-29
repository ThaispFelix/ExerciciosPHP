<h2> Passos necessários para realizar exercícios em PHP: </h2>
1. Instale o Docker em sua máquina. É possível baixá-lo pelo site:  https://www.docker.com/ ;
2. Caso use o sistema Windows é necessário baixar a extensão WSL2. A mesma irá possibilitar rodar distribuições do Linux no Windows. Para mais informações, acesso o site: https://learn.microsoft.com/pt-br/windows/wsl/install ;
3. Crie um arquivo docker-compose.yml no diretório raiz do seu projeto PHP;
4. Inclua as informações abaixo no arquivo docker-compose.yml

version: '3.9'
services:
  php-apache:
    image: php:8.2.4-apache-buster
    ports:
      - 8080:80
    volumes: 
      - ./:/var/www/html
5. Salve o arquivo docker-compose.yml e execute o comando docker-compose up -d no terminal, dentro do diretório raiz do seu projeto;
6. Acesse o ambiente pronto, com seu código PHP, no em seu navegador em  http://localhost:8080 .