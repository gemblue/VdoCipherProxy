<?php

/**
 * Simple Curl Wrapper, consuming as Object.
 * 
 * @package Curl
 * @author Gemblue
 */

namespace Gemblue\VdoCipherProxy;

class Request  {
    
    public $url;
    public $fields;
    public $header;
    
    /**
     * Set URL.
     * 
     * @return void
     */
    public function setURL($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Set Fields.
     * 
     * @return void
     */
    public function setFields($fields) {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Set Header.
     * 
     * Support chaining to build array.
     * 
     * @return void
     */
    public function setHeader($header) {
        $this->header[] = $header;

        return $this;
    }
    
    /**
     * Request POST JSON
     * 
     * @return array
     */
    public function postJSON() {

        $curl = curl_init();

        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        
        if (!empty($this->fields)) {
            $payload = json_encode($this->fields);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        }
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->header);
        
        $result = curl_exec($ch);
        curl_close($ch);
        
        return json_decode($result, TRUE) ?? null;
    }

    /**
     * Request POST 
     * 
     * @return array
     */
    public function post() { }

    /**
     * Request GET 
     * 
     * @return array
     */
    public function get() { }
}