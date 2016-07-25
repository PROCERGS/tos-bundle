# LoginCidadaoTOSBundle
Terms of Service Bundle for `login-cidadao`

# Installation

## 1. Add the dependency
Run on the terminal:

``` bash
$ composer require procergs/tos-bundle
```

## 2. Enable on your AppKernel

Edit `app/AppKernel.php` so that `registerBundles` contains the following:

``` php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new LoginCidadao\TOSBundle\LoginCidadaoTOSBundle(),
    );
}
```

## 3. Configuration

Finally, add this to your `config.yml`:

``` yaml
login_cidadao_tos:
    use_tasks: true
```
