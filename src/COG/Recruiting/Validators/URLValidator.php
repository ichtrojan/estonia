<?php

namespace COG\Recruiting\Validators;

class URLValidator
{
    /**
     * @param string $url
     * @throws \Exception
     */
    public function validate(string $url)
    {
        if(!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new \Exception("Homepage URL '$url' is Invalid!");
        }
    }
}
