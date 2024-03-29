<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ActiveRetailerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ActiveRetailerRepository extends \Doctrine\ORM\EntityRepository
{
    public function getQuantityAndDate()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT a.quantity, a.createdAt, YEAR(a.createdAt) AS y,
                  MONTH(a.createdAt) AS m, DAY(a.createdAt) AS d
                  FROM AppBundle:ActiveRetailer a
                  ORDER BY a.createdAt ASC'
            )
            ->getResult();

    }
}
