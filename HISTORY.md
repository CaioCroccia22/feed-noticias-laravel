Feed de notícias Laravel
------------------------------------------------------------
Esse repositório tem como finalidade a entrega de um feed de notícias para uma aplicação com o uso de API, utilizando ferramentas open-source, utilizando a linguagem PHP e framework Laravel.
=============================================================
1) DOCKER
Como primeira tecnologia será utilizado o Docker para containerização, no ambiente windows com o WSL 2

Para subir os containers criados utilize o comando:
docker-compose up -d 
=============================================================
2) Alteração TimeZone
Foi alterado a time zone para garanitir que as operações de data e hora no laravel são executadas corretamente.
O identificador foi localizado na documentação: 
https://www.php.net/manual/en/timezones.america.php


