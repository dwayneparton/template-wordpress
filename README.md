# Docker + Composer + Wordpress

This template provides some thoughts on how get docker and composer to play with wordpress. Feel free to use it.

## Folder Structure

    │
    ├── .docker - Containers used for local and production environment
    ├── .vscode
    ├── .github - Github workflows
    ├── packages - Custom PHP or JS Packages
    ├── public - Anything in this directory is public facing and accessible from the domain.
    ├──── wp - WP install via composer
    ├──── wp-content
    ├────── mu-plugins - I like to use must-use for plugins so every things can be managed in code
    ├────── plugins
    ├────── themes
    │

## Requirements

* Docker
* Composer

## Getting Started

### 1) Install PHP deps via

```sh
composer install
```

### 2) Update Environment Variables

Copy `.env.example` to `.env`

### 3) Start the Containers

```sh
docker compose up
```
