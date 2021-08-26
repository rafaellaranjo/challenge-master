# Challenge

Uma pequena plataforma modelo.

## Instalação

Criando nosso arquivo .env a partir do exemplo

```
cp .env.example .env
```

Em seguida, construímos nosso projeto com o docker

```
docker run --rm \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install
```

Então nós levantamos os containers

```
vendor/bin/sail up
```

E por fim, geramos nossa chave de aplicação e garantimos 
que nenhuma migration tenha passado despercebida

```
./vendor/bin/sail artisan key:generate

./vendor/bin/sail artisan migrate -seed
```

Ao fim disso, a aplicação deve estar rodando em http://localhost

Para garantir a integridade da aplicação é possível também rodar
os testes pelo sail

```
./vendor/bin/sail artisan test
```

