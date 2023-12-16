# Docker + Composer + Wordpress

Allows you to use composer to manage all of your wordpress plugins and wordpress. To get the most control I like to use must-use plugins and the env to set their parameters. You can use composer for other deps as well but that is not enabled by default, since it might not work for some hosts.

Allows you to remove third-party scripts from your repo. Yay! As a side-effect you will need to make sure you install your deps before deploying.

This template provides some thoughts on how get docker and composer to play with wordpress. Feel free to use it and you will likely need to customize it to your needs.

## Contributing

Contributions welcome. I'm open to ideas on how to stream-line the process.

## Folder Structure

    │
    ├── .docker - Containers used for local and production environment
    ├── .vscode
    ├── .github - Github workflows
    ├── public - Anything in this directory is public facing and accessible from the domain.
    ├──── wp - WP install via composer
    ├──── wp-content
    ├────── mu-plugins - I like to use must-use for plugins so every things can be managed in code
    ├────── plugins - Default plugin installation directory
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
