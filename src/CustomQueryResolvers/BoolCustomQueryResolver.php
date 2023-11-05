<?php

namespace Svix\CustomQueryResolvers;

use Svix\Internal\Runtime\Client\CustomQueryResolver;
use Symfony\Component\OptionsResolver\Options;

class BoolCustomQueryResolver implements CustomQueryResolver
{

    public function __invoke(Options $options, $value): string
    {
        return $value ? 'true' : 'false';
    }
}