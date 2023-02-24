<h4>Para rodar o projeto</h4>
1.Abrir o terminal do projeto 
<br>
<h4>copia o exemple para o env</h4>
<br>
2. rodar cp .env.example .env
<br>
<h4>build o projeto</h4>
<br>
3./vendor/bin/sail up -d
<br>
<h4>abre o shell onde roda todos os comandos artisan</h4>
<br>
4./vendor/bin/sail shell
<br>
<h4>roda as migrations do projeto</h4>
<br>
5.php artisan migrate
<br>
<h4>roda os dados fakes para popular o banco caso deseja criar na mão só não rodar o comando</h4>
<br>
6.php artisan seed
