<?php

namespace Laravelbap\Settings\ContextSerializers;

use Laravelbap\Settings\Context;
use Laravelbap\Settings\Contracts\ContextSerializer as ContextSerializerContract;

class ContextSerializer implements ContextSerializerContract
{
    /**
     * Serialize context into a string representation.
     *
     * @param \Laravelbap\Settings\Context $context
     * @return string
     */
    public function serialize(Context $context = null)
    {
        return serialize($context);
    }
}
