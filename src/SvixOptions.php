<?php

namespace Svix;

/**
 * Svix client's options.
 */
class SvixOptions
{
    /**
     * Create a new Svix client's options object.
     *
     * @param bool $debug Whether to enable debug mode
     * @param string|null $serverUrl Custom server URL
     */
    public function __construct(public bool $debug = false, public ?string $serverUrl = null)
    {
    }
}