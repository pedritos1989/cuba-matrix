<?php

namespace CubaMatrix\Bundle\AppBundle\Entity\Repository;

use Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductRepository as BaseProductRepository;

class ProductRepository extends BaseProductRepository
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function findStarProducts(string $locale, int $limit = 4): array
    {
        return $this->createQueryBuilder('o')
            ->addSelect('translation')
            ->innerJoin('o.translations', 'translation', 'WITH', 'translation.locale = :locale')
            ->andWhere('o.star = 1')
            ->addOrderBy('o.createdAt', 'DESC')
            ->setParameter('locale', $locale)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

}
