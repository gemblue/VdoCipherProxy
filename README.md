# VdoCipherProxy

Wrapper/Proxy for Vdo Cipher API.

### Requirement
PHP Curl Extension

### How to Use

Run composer
`composer require gemblue/VdoCipherProxy`

Make new object and enjoy!

```
use VdoCipher\VdoCipher;

$VdoCipher = new VdoCipher(YOUR_CIPHER_URL, YOUR_CIPHER_API_SECRET);
$result = $VdoCipher->getOtpPlaybackInfo();

print_r($result);
```
