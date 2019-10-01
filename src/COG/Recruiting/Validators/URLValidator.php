<?php

namespace COG\Recruiting\Validators;

class URLValidator
{
    public function validate(string $url)
    {
        if(!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new \Exception("Homepage URL '$url' Invalid!");
        }
    }
}
