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

/**
 * @author Michael Babker <michael.babker@gmail.com>
 */
interface SupplierAwareInterface
{
    /**
     * @return SupplierInterface
     */
    public function getSupplier(): ?SupplierInterface;

    /**
     * @param null|SupplierInterface $supplier
     */
    public function setSupplier(?SupplierInterface $supplier);
}
