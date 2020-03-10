<!-- RODANDO O DOCKER -->
Rode o docker com o comando 
docker-compose up -d

composer dump-autoload -o

<!-- PORTA DO PROJETO -->
O arquivo 'index.php' está mapeado para
rodar na porta 8080

<!-- ADICIONANDO TESTES -->
A pasta contendo os testes deve ser o diretório 'tests'

<!-- CLASSES INSTANCIADAS PARA TESTE -->
As classes utilizadas para efetuar os testes sobre as mesmas,
devem se encontrar no diretorio 'app/classes'

<!-- RODANDO OS TESTES -->
.code/vendor/bin/phpunit  --> Roda os testes mapeados
.code/vendor/bin/phpunit tests/{NomeDoArquivoDeTeste.php}

<!-- OBSERVAÇÕES -->
Classes de teste devem ter sufixo 'Test';
O arquivo 'phpunit.xml' serve para configurar os testes;