# VdoCipherProxy

Wrapper/Proxy for Vdo Cipher API.

### Requirement

PHP Curl Extension

```
sudo apt install php-curl
```

### How to Use

Grab it from composer

```
composer require gemblue/vdo-cipher-proxy
```

Make new object and enjoy!

```
use Gemblue\VdoCipherProxy;

$VdoCipher = new VdoCipher(YOUR_CIPHER_URL, YOUR_CIPHER_API_SECRET);
$result = $VdoCipher->getOtpPlaybackInfo();

print_r($result);
```
