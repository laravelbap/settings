<?php

namespace Laravelbap\Settings\KeyGenerators;

use Laravelbap\Settings\Context;
use Laravelbap\Settings\Contracts\ContextSerializer;
use Laravelbap\Settings\Contracts\KeyGenerator as KeyGeneratorContract;

class KeyGenerator implements KeyGeneratorContract
{
    /**
     * Context serializer.
     *
     * @var \Laravelbap\Settings\Contracts\ContextSerializer
     */
    protected $serializer;

    /**
     * @param \Laravelbap\Settings\Contracts\ContextSerializer $serializer
     */
    public function __construct(ContextSerializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Generate storage key for a given key and context.
     *
     * @param string $key
     * @param \Laravelbap\Settings\Context $context
     * @return string
     */
    public function generate($key, Context $context = null)
    {
        return md5($key.$this->serializer->serialize($context));
    }
}
