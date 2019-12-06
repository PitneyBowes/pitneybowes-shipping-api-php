# &#x1F534; DEPRECATED . THIS PROJECT IS NO LONGER MAINTAINED 

# Pitney Bowes Shipping Client Library for PHP

The Pitney Bowes Shipping Services APIs provide easy access to United States 
Postage Service shipping and tracking services that can be easily integrated 
into any web application such as online shopping carts, e-commerce sites or 
multi-carrier applications. 

This package provides a wrapper layer allowing easy access to the Pitney Bowes 
shipping REST APIs in the PHP scripting language.  

You would need a Pitney Bowes developer account for testing and using the API
and the client library.

For more informaton please visit the 
[Pitney Bowes developer portal](http://developer.pitneybowes.com).

## Installation
 
You can clone or download the source from Github repository (https://github.com/pitneybowes/pitneybowes-shipping-api-php).

## Dependecies

You would need to enable the cURL extension (php5-curl) available in your environment.

## Registration

Make sure you have signed up a developer account on the 
[Pitney Bowes developer portal](http://developer.pitneybowes.com).

Once you have successfully registered for a developer account, sign in and
you can access your API test key (`API key` and `API secret`) from the *Dashboard*
page. 

You can also access your `Developer ID` (e.g.: 12345678) from the *My Account* 
page.

By default, your developer account is configured to work with individual 
merchant account payment model. In this caes, each merchant signs up for 
a Pitney Bowes shipment account directly and their funds are directly 
managed by Pitney Bowes. 

For testing purpose, you can create a merchant account 
at https://developer.pbshippingmerchant.pitneybowes.com/home?developerID={DeveloperID}.
Make sure you replace the placeholder in the URL with your own developer ID.

You will use the `email address` for registering the merchant account for
identifying the corresponding mercchant in the shipping API call. 

## Understanding Configuration

The client library provides a configuration object (*lib/pbshipping/pbshipping.php*) for 
managing configuraton for environment using the Shipping APIs. The values 
for each parameter can be readily accessed and modified programmatically:

```
class PBShipping {

	public static $sandbox = "https://api-sandbox.pitneybowes.com";
	public static $production = "https://api.pitneybowes.com";
	public static $is_production = false;
	public static $default_api_version = "/v1"; 
	public static $overwrite_api_version = array(
		"post/developers/.../merchants/registration" => "/v2",
		"get/ledger/developers/.../transactions/reports" => "/v2"
	);
	. . . . . 
```
* *sandbox* and *production* refer to the URL pointing at the testing (sandbox)
and production server supporting the endpoints;
* *is_production* controls if the application should run in sandbox or 
production mode;
* *default_api_version* defines the default API version to be used in general 
except for cases where explict overrides are specified;
* *override_api_version* is a set (Ruby Hash) of API version 
overrides for specific API calls; each entry defines the particular version 
to be used for the corresponding API.

#### Choosing API version

You may need to use different version number for diferent Shipping APIs. 
This can be accomplished by customizing the *defaul_api_version* and 
*override_api_version* entries in the *Configuration.params* structure. 

To specify the version number of a particular call type:
* Identify the *signature* for the API call; the signature mimics the relative
path of the API and can be found in the comment headers in the resource files 
(*account.php, address.php, carrier.php, developer.php, manifest.php, shipment.php, tracking.php*).
* Add an entry to *override_api_version* in the format 
*<api signature>: <verson string>* 


## Running the Tutorials

A tutorial *tutorial.php* is provided to demonstrate how to use the different class and
methods available through the client library to consume the shipping services.

```
php tutorial.php
```

You would need to set your authentication (key and secret), 
developer (ID), and merchant (email) credentials either through environment 
variables or command line arguments.

### Setting through Environment Variables

The following four varaibles should be set:
* PBSHIPPING_KEY: your assigned API key
* PBSHIPPING_SECRET: your assigned API secret
* PBSHIPPING_DEVID: your Developer ID
* PBSHIPPING_MERCHANT: email address for the regsitered merchant account

```
export PBSHIPPING_KEY=<api key>
export PBSHIPPING_SECRET=<api secret>
export PBSHIPPING_DEVID=<developer id>
export PBSHIPPING_MERCHANT=<merchant email address>
```

### Setting through Command Line Arguments

Use the command line long options *--key*, *--secret*, *--devid*, and *--merchant*:

```
php tutorial_client_library.php --key=<your key> --secret=<your secret> 
                                --devid==<developer id> 
                                --merchant=<merchant email>
```

## Running Test 

The test suite can be found under the *test* directory and can be run through the 
phpunit command (https://phpunit.de/)

```
phpunit
```

Similar to the tutorial, you have to set the authentication, developer, and 
merchant settings through environment variables to run the test.

## Documentation

The Pitney Bowes Shipping Services API (REST) documentation can be found at the 
[Pitney Bowes developer portal](http://developer.pitneybowes.com).

Developers are also encouraged to use the tutorial example and source code 
comment blocks for information on the wrapper layer interface and mapping to the 
underlying REST shipping APIs. 

## Attribution Notice

This product contains cURL-PHP, version number 7.50.1, which is licensed under the 
MIT license. The license can be downloaded from https://opensource.org/licenses/MIT. 
The source code for this software is available from https://curl.haxx.se.

## License

Copyright 2016 Pitney Bowes Inc.

The Shipping API for Client Library (PHP) is licensed under the following license:

Permission is hereby granted, free of charge, to any person obtaining a copy of this 
software and associated documentation files (the "Software"), to deal in the Software 
without restriction, including without limitation the rights to use, copy, modify, 
merge, publish, distribute, sublicense, and/or sell copies of the Software, and to 
permit persons to whom the Software is furnished to do so, subject to the following 
conditions:

The above copyright notice and this permission notice shall be included in all copies 
or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR 
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE 
FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR 
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER 
DEALINGS IN THE SOFTWARE.
