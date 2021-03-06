<?php

namespace Assurance\FrontBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
	public function findAllLatestArticles($nb, $id)
    {
    	$qb = $this->createQueryBuilder('a');
    	$qb->from(':Article', 'a')
		;
		$qb = $this->createQueryBuilder('a')
            ->where('a.id != :id')
            ->setMaxResults($nb)
			->orderBy('a.id','DESC')
			->setParameter('id', $id);

		return $qb->getQuery()->getResult();
    }
}
