<?php

namespace BCloud\SpoKuWaBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Course
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Course extends EntityRepository
{
	public function findBySemester($id, $year, $term)
    {
		$data = $em->getRepository('BCloudSpoKuWaBundle:Coursedata')->findOneBy(array(
			'id' => '',
			'' => '',
		));
        return $this->getEntityManager()
            ->createQuery('SELECT p FROM AcmeStoreBundle:Product p ORDER BY p.name ASC')
            ->getResult();
    }
}