<?php

/*
 * This file is part of the BabDevSupplierPlugin package.
 *
 * (c) Michael Babker
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BabDev\SupplierPlugin\Model;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\ToggleableInterface;

/**
 * @author Michael Babker <michael.babker@gmail.com>
 */
interface SupplierInterface extends
    CodeAwareInterface,
    ResourceInterface,
    TimestampableInterface,
    ToggleableInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string $name
     */
    public function setName(?string $name);

    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string $description
     */
    public function setDescription(?string $description);

    /**
     * @return string|null
     */
    public function getContactEmail(): ?string;

    /**
     * @param string $contactEmail
     */
    public function setContactEmail(?string $contactEmail);
}
