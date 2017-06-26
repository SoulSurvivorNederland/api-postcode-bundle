Api Postcode Bundle
===================

This bundle can be useed to fetch Address details from zipcode with number.
See: https://api-postcode.nl for more information.

Installation
------------
Installation is a quick 3 step process:

1. Download api-postcode-bundle using composer
2. Enable the Bundle in AppKernel.php
3. Configure Api Postcode credentials

### Step 1: Download postcode-bundle using composer

Add ApiPostcodeBundle by running the command:

``` bash
$ composer require api-postcode/api-postcode-bundle
```

### Step 2: Enable the Bundle in AppKernel.php


``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new ApiPostcode\PostcodeBundle\ApiPostcodeBundle(),
    );
}
```

### Step 3: Configure Api Postcode credentials
```yaml
# app/config/config.yml

# Api Postcode Token
api_postcode:
    token: secret-token


```

Usage Services
--------------
``` php
$address = $this->get('api.postcode')->fetchAddress('1012JS', 1);
	
$address->getStreet();      // Dam
$address->getCity();        // Amsterdam
$address->getHouseNumber(); // 1
$address->getZipCode();     // 1012JS
$address->getLongitude();   // 4.4584
$address->getLatitude();    // 52.2296
```

Usage from API
--------------

Or try the API response:

http://127.0.0.1:8000/api/postcode?postcode=2011WD&nummer=2
