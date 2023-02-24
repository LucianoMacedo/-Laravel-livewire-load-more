Para rodar o projeto 
1.Abrir o terminal do projeto 

##copia o exemple para o env
2. rodar cp .env.example .env

##build o projeto
3./vendor/bin/sail up -d

##abre o shell onde roda todos os comandos artisan 
4./vendor/bin/sail shell

##roda as migrations do projeto
5.php artisan migrate

##roda os dados fakes para popular o banco caso queria criar na mão só não rodar o comando
6.php artisan seed
