<?php

namespace CubaMatrix\Bundle\AppBundle\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct
{
    /**
     * @var bool
     */
    private $star;

    /**
     * @return bool|null
     */
    public function getStar(): ?bool
    {
        return $this->star;
    }

    /**
     * @param bool $star
     */
    public function setStar(bool $star): void
    {
        $this->star = $star;
    }

}
