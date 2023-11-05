<?php

namespace Svix;

class SvixOptions
{
    public function __construct(public bool $debug = false, public ?string $serverUrl = null)
    {
    }
}