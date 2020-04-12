<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Twig\Status;

/**
 * @author Hugo Briand <briand@ekino.com>
 */
interface StatusClassRendererInterface
{
    /**
     * Tells if class may handle $object for status class rendering.
     *
     * @param mixed $object
     * @param null  $statusName
     *
     * @return bool
     */
    public function handlesObject($object, $statusName = null);

    /**
     * Returns the status CSS class for $object.
     *
     * @param mixed  $object
     * @param null   $statusName
     * @param string $default
     *
     * @return string
     */
    public function getStatusClass($object, $statusName = null, $default = '');
}

interface_exists(\Sonata\CoreBundle\Component\Status\StatusClassRendererInterface::class);
