<?php

/**
 * VdoCipher Proxy/Wrapper, Interface.
 * 
 * @package VdoCipher
 * @author Gemblue
 */

namespace Gemblue\VdoCipherProxy;

interface VdoCipherInterface {
    public function setEndpoint(string $endpoint);
    public function setApiSecret(string $apiSecret);
    public function getOtpPlaybackInfo();
}