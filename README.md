# Estrutura básica para executar o PHP

docker compose
``` bash
docker compose up -d

docker compose up -d --build

docker compose build --no-cache

dokcer compose up -d

docker exec -it php84 bash
```

alias
``` bash
bash build
bash bash
bash exec
```
[Project](/tree/v2)


``` bash
alias up='sh $([ -f up ] && echo up || echo ./up)'
alias down='sh $([ -f down ] && echo down || echo ./down)'
alias down='sh $([ -f build ] && echo build || echo ./build)'
alias down='sh $([ -f bash ] && echo bash || echo ./bash)'
```