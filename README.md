# docker-laravel

![License](https://img.shields.io/github/license/ucan-lab/docker-laravel?color=f05340)
![Stars](https://img.shields.io/github/stars/ucan-lab/docker-laravel?color=f05340)
![Issues](https://img.shields.io/github/issues/ucan-lab/docker-laravel?color=f05340)
![Forks](https://img.shields.io/github/forks/ucan-lab/docker-laravel?color=f05340)

## Introduction

Build laravel development environment with docker-compose.

## Usage

- [Build for Mac](https://github.com/ucan-lab/docker-laravel/wiki/Build-for-Mac)
- [Build for Windows](https://github.com/ucan-lab/docker-laravel/wiki/Build-for-Windows)

## Container structure

```bash
├── app
├── web
└── db
```

### app container

- Base image
  - [php](https://hub.docker.com/_/php):7.4-fpm-buster
  - [composer](https://hub.docker.com/_/composer):latest

### web container

- Base image
  - [nginx](https://hub.docker.com/_/nginx):1.18-alpine
  - [node](https://hub.docker.com/_/node):14.2-alpine

### db container

- Base image
  - [mysql](https://hub.docker.com/_/mysql):8.0

###  docker-compose.ymlがある場所に移動

```
cd infrastructure
```

### docker-compose.ymlをビルド

```
docker-compose build
```

### ビルドしたのをたてる

```
docker-compose up -d
```

### docker appコンテナに入る

```
docker exec -it dockerlaravel_app_1 /bin/bash
```

### pakageをインストールする

```
/work/backend# composer install
```

### vim をインストール

```
/work/backend#　apt-get update
/work/backend#　apt-get install vim
```

### vim .env.sampleでmysqlの設定を変更する

```
/work/backend# vim .env.example

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel_local
DB_USERNAME=phper
DB_PASSWORD=secret
```

### .envを作成

```
/work/backend#　cp .env.example .env
```

### app keyを作成

```
/work/backend#　php artisan key:generate
```

### docker toolboxの場合

```
docker-machine ls
```
現在 active の IP を確認する
URL：192.168.XXX.XXX:80 にアクセスする

### docker toolboxの以外場合

URL：127.0.0:1 にアクセスする
