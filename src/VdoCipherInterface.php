<?php

/**
 * VdoCipher Proxy/Wrapper, Interface.
 * 
 * @package VdoCipher
 * @author Gemblue
 */

namespace VdoCipher;

interface VdoCipherInterface {
    public function setEndpoint(string $endpoint);
    public function setApiSecret(string $apiSecret);
    public function getOtpPlaybackInfo();
}