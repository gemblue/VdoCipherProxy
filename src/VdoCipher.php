<?php

/**
 * VdoCipher Proxy/Wrapper, consuming as Object.
 * 
 * @package VdoCipher
 * @author Gemblue
 */

namespace VdoCipher;

class VdoCipher implements VdoCipherInterface  {
    
    public $endpoint;
    public $apiSecret;
    
    /**
     * Support construct setter.
     * 
     * @return void
     */
    public function __construct(string $endpoint, string $apiSecret) {
        $this->endpoint = $endpoint;
        $this->apiSecret = $apiSecret;

        return $this;
    }

    /**
     * Set Endpoint
     * 
     * @return void
     */
    public function setEndpoint(string $endpoint) {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * Set Api Secret
     * 
     * @return void
     */
    public function setApiSecret(string $apiSecret) {
        $this->apiSecret = $apiSecret;

        return $this;
    }

    /**
     * Execute request to get OTP and Playback Info.
     * 
     * @return array
     */
    public function getOtpPlaybackInfo() {
        
        // Build Request from Internal Library.
        $request = new Request;
        
        $result = $request->setURL($this->endpoint)
                          ->setHeader('Content-length: 0')
                          ->setHeader('Content-Type: application/json')
                          ->setHeader('Authorization: Apisecret ' . $this->apiSecret)
                          ->postJSON();
        
        return $result;
    }
}