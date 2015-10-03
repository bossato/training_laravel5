## Configuration

- PHP 5.6
- nginx 1.8
- MySQL 5.6
- node
- gulp

## Setup

### Permisson

change storage permisson
```
chmod -R 777 storage
```

### Env

create env file
```
touch .env
```

sample
https://github.com/laravel/laravel/blob/9b359ba24cccaebbf6b54b1962f01bfc0a57a950/.env.example

### Laravel Elixir

install node

```
brew install node
```

install gulp

```
npm install -g gulp
```

install package.json

```
npm install
```

if you want to monitor assets files in gulp or minified

```
gulp watch
gulp --production
```
