# php-start-project

Então voçe decide iniciar um novo projecto em php, para manter as coisas organizadas talvez voçe decisa usar o Padrão MVC e junto dele aplicar boas praticas.

Voçe não quer usar uma **framework** como ***LARAVEL*** ou ***SYNFONY*** porque não quer "matar uma formiga com uma bazuca".

Mas iniciar um projecto do 0 mesmo para fins didaticos pode ser trabalhoso.

Voçe tem de pensar nas Rotas,Testes, Template Engine, e por mais que seja bom fazer isso na mão, voçe não gostaria de reinventar a Roda.

Por isso reunimos esta estrutura composta por diversos Packages para te ajudar a dar um ***start*** no seu projecto.

## Packages

 - [league/plates](https://platesphp.com/) - Pacote para Template Engine, com hierarquia de Visão.
 - [izniburak/router](https://github.com/izniburak/php-router) - Pacote para ter sistema de rotas, em termos de funcionamento muito similar ao Laravel.E permite adicionar Meddlewares.
 - [doctrine/orm]() - Parte do projecto Doctrine, um ORM para tornar os seus dados em Objectos.

 - [phpmailer/phpmailer]() -  Disparo e envio de Email

 - [phpunit/phpunit]() -  Testes Unitarios


## Rodar

Para rodar o projecto rode o seguinte comando: 

    $ php turbo

Este comando vai iniciar o servidor embutido do php com o ***target*** para a pasta **public** que é a porta de entrada para a nossa aplicação.

## Estrutura

 - `app` - Pasta raiz do projecto onde com tem outras sub-pastas como:
    
    - **controllers** -> Onde ficam os controllers.

    - **helpers** -> Nele tem 2 ficheiros o `ÈasyPDO` uma classe para criar consulta no banco de Dados, caso voçe não queira usar o Doctrine,contem os comandos de CRUD e não só, Criada pelo [João Ribeiro](https://www.youtube.com/c/JLDRPT).
    O outro Ficheiro o `Func` contem um conjunto de funções estaticas, para ajudar nas tarefas, podem ser facilmente expandidas.

    - **models** -> Onde ficam os models. Quando criar as entidades do ORM elas devem ficar nesta pasta.

    - **view** -> Onde ficam as nossas visões.

- `config` esta pasta tem configurações de alguns pacotes.

    - **core.php** este ficheiro criar algumas constantes,como acesso user e senha,url do projecto etc, e carrega os demais arquivos de configuração.

        ***OBS***: Mais informação sobre a configuração do Doctrine ORM e do Doctrine CLI e do Router visite a pagina dos referidos projectos

- `public` Porta de entrada da aplicação os assets podem ser colocados na pasta assets


- `turbo` Este pequeno ficheiro vai iniciar um servidor.



## Consideração Final

Sinta-se a vontade para recriar e expandir ele, e contribuir com o que quiser.