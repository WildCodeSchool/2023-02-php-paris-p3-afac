<?php

namespace App\Repository;

use App\Entity\Anecdote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Anecdote>
 *
 * @method Anecdote|null find($id, $lockMode = null, $lockVersion = null)
 * @method Anecdote|null findOneBy(array $criteria, array $orderBy = null)
 * @method Anecdote[]    findAll()
 * @method Anecdote[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnecdoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Anecdote::class);
    }

    public function save(Anecdote $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Anecdote $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
