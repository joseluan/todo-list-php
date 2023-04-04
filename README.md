TODO LIST COM - PHP Apache MySQL
===================================

### Introdução
A estrutura do projeto:

```
/todo-list-php/
├── apache
│   ├── apache_php.conf
│   └── Dockerfile
├── docker-compose.yml
├── php
│   └── Dockerfile
├── mysql
│   ├── Dockerfile
│   └── dump.sql
├── public
│   ├── config.php
│   ├── create.php
│   ├── delete.php
│   ├── static
│   │   └── css
|   |       └── mystyle.css
│   ├── delete.php
│   ├── update.php
│   ├── insert.php
│   ├── list.php
│   └── index.php
└── README.md
```


### Rodando o projeto
docker-compose up -d