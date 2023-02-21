# The Application 
It is an API application that allows to create products. 
The application enables applying the hexagonal architecture approach ( Domain Driven Design DDD ).

```sh
+ Symfony 6.2 
+ PHP8
+ DDD Domain Driven Design
+ Nelmio API 
+ PHPUnit Test-Coverage
+ Docker Docker-Compose
+ Workflow GitHub CI/CD
```
# Installation
Clone the project :
```sh
git clone https://github.com/abdelaziz-tleti/tleti-sf-6-DDD.git
cd tleti-sf-6-DDD
```
Init Project ( Install dependencies & start docker .. )  
```sh
bin/workspace init
```

Go to nelmio api interface : http://127.0.0.1:8000/api/doc

Adminer Interface  http://localhost:8080/
```sh
System : PostgreSQL
Server : database
Username : app
Password : !ChangeMe!
Database : app
```

Execute phpunit test-coverage
```sh
bin/workspace tests
```
To see other bin/workspace commands
```sh
bin/workspace
```
# Project architecture
```sh
src
├── Application
│   ├── Command
│   └── Service
├── Domain
│   ├── Entity
│   └── Repository
├── Infrastructure
│   ├── ParamConverter
│   ├── Repository
│   └── Resources
├── Kernel.php
└── UI
    └── Rest
```
# Project architecture and classes
```sh
src
├── Application
│   ├── Command
│   │   └── Product
│   │       ├── Handler
│   │       │   └── CreateProductCommandHandler.php
│   │       └── Request
│   │           └── CreateProductRequest.php
│   └── Service
│       └── Product
│           ├── CreateProductFactory.php
│           └── CreateProductHandler.php
├── Domain
│   ├── Entity
│   │   └── Product.php
│   └── Repository
│       └── ProductRepositoryInterface.php
├── Infrastructure
│   ├── ParamConverter
│   │   └── CreateProductConverter.php
│   ├── Repository
│   │   └── ProductRepository.php
│   └── Resources
│       └── Doctrine
│           └── Product.orm.yml
├── Kernel.php
└── UI
    └── Rest
        ├── Controller
        │   └── Product
        │       └── CreateProductAction.php
        └── DTO
            └── CreateProductDTO.php
```

