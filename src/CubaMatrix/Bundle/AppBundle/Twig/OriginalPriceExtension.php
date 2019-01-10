<?php

namespace CubaMatrix\Bundle\AppBundle\Twig;

use Webmozart\Assert\Assert;
use Sylius\Component\Core\Exception\MissingChannelConfigurationException;
use Sylius\Component\Core\Model\ProductVariantInterface;

class OriginalPriceExtension extends \Twig_Extension
{
    /**
     * @return array|\Twig_Filter[]
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('cubamatrix_get_originalPrice', array($this, 'originalPriceFilter')),
        );
    }

    /**
     * @param ProductVariantInterface $productVariant
     * @param array $context
     * @return int|null
     */
    public function originalPriceFilter(ProductVariantInterface $productVariant, array $context)
    {
        Assert::keyExists($context, 'channel');

        $channelPricing = $productVariant->getChannelPricingForChannel($context['channel']);

        if (null === $channelPricing) {
            throw new MissingChannelConfigurationException(sprintf(
                'Channel %s has no original price defined for product variant %s',
                $context['channel']->getName(),
                $productVariant->getName()
            ));
        }

        return $channelPricing->getOriginalPrice();
    }

}
