<?php

namespace CubaMatrix\Bundle\AppBundle\Entity\Repository;

use Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductRepository as BaseProductRepository;
use Sylius\Component\Core\Model\ChannelInterface;

class ProductRepository extends BaseProductRepository
{
    /**
     * @param ChannelInterface $channel
     * @param string $locale
     * @param int $limit
     * @return array
     */
    public function findStarProducts(ChannelInterface $channel, string $locale, int $limit = 4): array
    {
        $qb = $this->createQueryBuilder('o');
        return $qb
            ->addSelect('translation')
            ->innerJoin('o.translations', 'translation', 'WITH', 'translation.locale = :locale')
            ->innerJoin('o.variants', 'variant')
            ->innerJoin('variant.channelPricings', 'channelPricing')
            ->andWhere('o.enabled = true')
            ->andWhere('channelPricing.channelCode = :channelCode')
            ->andWhere($qb->expr()->isNull('channelPricing.originalPrice'))
            ->andWhere('o.star = 1')
            ->addOrderBy('o.createdAt', 'DESC')
            ->setParameter('locale', $locale)
            ->setParameter('channelCode', $channel->getCode())
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param ChannelInterface $channel
     * @param string $locale
     * @return array
     */
    public function findOffers(ChannelInterface $channel, string $locale): array
    {
        $qb = $this->createQueryBuilder('o');
        return $qb
            ->addSelect('translation')
            ->innerJoin('o.translations', 'translation', 'WITH', 'translation.locale = :locale')
            ->innerJoin('o.variants', 'variant')
            ->innerJoin('variant.channelPricings', 'channelPricing')
            ->andWhere('o.enabled = true')
            ->andWhere('channelPricing.channelCode = :channelCode')
            ->andWhere($qb->expr()->isNotNull('channelPricing.price'))
            ->andWhere($qb->expr()->isNotNull('channelPricing.originalPrice'))
            ->addOrderBy('o.createdAt', 'DESC')
            ->setParameter('channelCode', $channel->getCode())
            ->setParameter('locale', $locale)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param ChannelInterface $channel
     * @param string $locale
     * @return array
     */
    public function allProductsByChannel(ChannelInterface $channel, string $locale): array
    {
        $qb = $this->createQueryBuilder('o');
        return $qb
            ->addSelect('translation')
            ->innerJoin('o.translations', 'translation', 'WITH', 'translation.locale = :locale')
            ->innerJoin('o.variants', 'variant')
            ->innerJoin('variant.channelPricings', 'channelPricing')
            ->andWhere('o.enabled = true')
            ->andWhere('channelPricing.channelCode = :channelCode')
            ->andWhere($qb->expr()->isNull('channelPricing.originalPrice'))
            ->setParameter('channelCode', $channel->getCode())
            ->setParameter('locale', $locale)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param ChannelInterface $channel
     * @param string $locale
     * @param $phrase
     * @return array
     */
    public function searchProduct(ChannelInterface $channel, string $locale, $phrase): array
    {
        $qb = $this->createQueryBuilder('o');
        return $qb
            ->addSelect('translation')
            ->innerJoin('o.translations', 'translation', 'WITH', 'translation.locale = :locale')
            ->innerJoin('o.variants', 'variant')
            ->innerJoin('variant.channelPricings', 'channelPricing')
            ->andWhere('translation.name LIKE :name')
            ->setParameter('name', '%' . $phrase . '%')
            ->andWhere('o.enabled = true')
            ->andWhere('channelPricing.channelCode = :channelCode')
            ->andWhere($qb->expr()->isNull('channelPricing.originalPrice'))
            ->setParameter('channelCode', $channel->getCode())
            ->setParameter('locale', $locale)
            ->getQuery()
            ->getResult();
    }

}
