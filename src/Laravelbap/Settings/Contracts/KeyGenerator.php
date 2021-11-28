<?php

namespace Laravelbap\Settings\Contracts;

use Laravelbap\Settings\Context;

interface KeyGenerator
{
    /**
     * Generate storage key for a given key and context.
     *
     * @param string $key
     * @param \Laravelbap\Settings\Context $context
     * @return string
     */
    public function generate($key, Context $context = null);
}
