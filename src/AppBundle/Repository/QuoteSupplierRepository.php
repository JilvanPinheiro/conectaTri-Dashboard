<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * QuoteSupplierRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuoteSupplierRepository extends EntityRepository
{

    /**
     * @param $id
     * @return array
     */
    public function getQuotesTotal($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT SUM(qs.price * qs.quantity) AS total
                  FROM AppBundle:QuoteSupplier qs
                  WHERE qs.deleted = 0 AND qs.price > 0 
                  AND qs.quoteProduct IN (
                    SELECT qp 
                    FROM AppBundle:QuoteProduct qp
                    WHERE qp.deleted = 0 
                    AND qp.quote IN (
                      SELECT q
                      FROM AppBundle:Quote q
                      WHERE q.retailer = :id
                    )
                  )'
            )
            ->setParameters(array('id' => $id))
            ->setMaxResults(1)
            ->getResult();
    }

    public function updateStatusInProgress($quoteId, $representativeId)
    {
        return $this->getEntityManager()
            ->createQuery(
                'UPDATE AppBundle:QuoteSupplier qs
                SET qs.status = 1
                WHERE qs.deleted = 0 
                AND qs.representative = :representative 
                AND qs.quoteProduct IN (
                  SELECT qp 
                  FROM AppBundle:QuoteProduct qp
                  WHERE qp.deleted = 0 
                  AND qp.quote = :quote
                )'
            )
            ->setParameters(array('quote' => $quoteId, 'representative' => $representativeId))
            ->getResult();
    }

    public function getQuoteSupplierByQuote($quoteId, $representativeId)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT qs
                FROM AppBundle:QuoteSupplier qs
                WHERE qs.deleted = 0 
                AND qs.representative = :representative 
                AND qs.quoteProduct IN (
                  SELECT qp 
                  FROM AppBundle:QuoteProduct qp
                  WHERE qp.deleted = 0 
                  AND qp.quote = :quote
                )'
            )
            ->setParameters(array('quote' => $quoteId, 'representative' => $representativeId))
            ->getResult();
    }

    public function getQuoteSupplierSum($quote, $supplier)
    {
        $qb = $this->createQueryBuilder('qs');
        return (float) $qb
            ->select('SUM(qs.price * qs.quantity) total')
            ->innerJoin('AppBundle:QuoteProduct', 'qp', 'WITH', 'qp = qs.quoteProduct')
            ->innerJoin('AppBundle:Representative', 'r', 'WITH', 'r = qs.representative')
            ->andWhere('qp.quote = :quote')
            ->andWhere('r.supplier = :supplier')
            ->setParameters(array('quote' => $quote, 'supplier' => $supplier))
            ->getQuery()->getSingleScalarResult();
    }
}
