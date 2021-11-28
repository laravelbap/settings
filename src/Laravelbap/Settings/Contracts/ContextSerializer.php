<?php

namespace Laravelbap\Settings\Contracts;

use Laravelbap\Settings\Context;

interface ContextSerializer
{
    /**
     * Serialize context into a string representation.
     *
     * @param \Laravelbap\Settings\Context $context
     * @return string
     */
    public function serialize(Context $context = null);
}
