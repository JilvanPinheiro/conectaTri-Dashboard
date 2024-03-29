<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * QuoteProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuoteProductRepository extends EntityRepository
{
    public function removeExcludedQuoteProducts($quoteId, $productsIds)
    {
        return $this->getEntityManager()
            ->createQuery(
                'DELETE FROM AppBundle:QuoteProduct qp
                  WHERE qp.quote = :quote AND
                  qp.product NOT IN ( :products )'
            )
            ->setParameters(array('quote' => $quoteId, 'products' => $productsIds))
            ->getResult();
    }

    /**
     * @param $id
     * @return array
     */
    public function countQuotesProduct($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT COUNT(qp) AS qty
                    FROM AppBundle:QuoteProduct qp
                    WHERE qp.deleted = 0 
                    AND qp.quote IN (
                      SELECT q
                      FROM AppBundle:Quote q
                      WHERE q.retailer = :id
                    )'
            )
            ->setParameters(array('id' => $id))
            ->setMaxResults(1)
            ->getResult();
    }
}
