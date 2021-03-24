# Projeto FaleMais - Telzir

## Sobre o Projeto
Ferramenta que calcula diferença de valores com base do novo plano FaleMais disponibilizado pela Telzir.

## Tecnologias Utilizadas
### Back end
- PHP
- MySQL
### Front end
- HTML5
- CSS3
- Javascript
- Bootstrap
- FontAwesome
- JQuery

## Layout do Projeto
Projeto feito responsivo para possuir suporte tanto web quanto mobile.
![tela-inicial](https://user-images.githubusercontent.com/77065108/112268474-cb8c2400-8c55-11eb-98d1-654a796dab7d.png)
![modal-calculo](https://user-images.githubusercontent.com/77065108/112270538-8f0df780-8c58-11eb-9cb8-e016332bc7d5.png)

## Como executar o projeto

### pré requisitos: PHP 7 (ou superior) e MySQL
```bash
  # Clonar Repositório
    gh repo clone dnsouzad/falemais_loldesign
   
  # entrar na pasta do projeto
    cd falemais_loldesign
    
  # criar tabelas no banco MySQL
    - plano 
      CREATE TABLE `plano` (
        `id` int NOT NULL AUTO_INCREMENT,
        `nome` varchar(45) NOT NULL,
        `minutos` int NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
      
    - regiao 
      CREATE TABLE `regiao` (
        `id` int NOT NULL AUTO_INCREMENT,
        `origem_destino` varchar(45) NOT NULL,
        `p_min` decimal(9,2) NOT NULL,
         PRIMARY KEY (`id`)
      ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
      
  # alterar dentro de config/Connection.php os valores 
    "<seu host>", "<seu db>", "<seu_user>" e "<sua_senha>" referente ao banco de dados MySQL criado em seu ambiente local.
   
  # executar o projeto
  php -S localhost:3000
  
  ```
  ## Autor
  - **Daniela Delfino**
  - LinkedIn: https://www.linkedin.com/in/daniela-delfino0512/
