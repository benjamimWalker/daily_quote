# Daily Quote

## Introdução
Este projeto mostra uma mensagem diferente a cada dia da semana, com variações em datas especiais.
Ele demonstra um simples exemplo do design pattern Strategy.

## Instalação

Primeiro clone este repositório

```
git clone git@github.com:benjamimWalker/daily_quote.git
```
## Configuração
Suba o container. Se docker compose não funcionar, tente docker-compose.

```
docker compose up -d
```

Instale as dependências do composer.
```
docker compose exec app composer install
```

Inicie o servidor dev

```
docker compose exec app composer serve
```

Acesse o endereço, nele estará sua mensagem do dia.
```
http://localhost:8000
```


## Testando

Você pode executar os testes com o comando.
```
./vendor/bin/phpunit tests   
```
