# Copyright (C) 2021 Alan Cruz
# PHP-Prototypes

# Git Clone
```
git clone git@github.com:AlanACruz/PHP-Prototypes.git ~/git/PHP-Prototypes
```

# Run Script in Container Example
```
docker run \
  -i \
  -t \
  --rm \
  --name my-running-script \
  -v ~/git/PHP-Prototypes:/usr/src/myapp:Z \
  -w /usr/src/myapp \
  php:7.4-cli \
  php your-script.php
```
