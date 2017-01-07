<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 2:38 AM
 */

namespace Auction\Factory;


use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Interop\Container\ContainerInterface;
use Ramsey\Uuid\Doctrine\UuidType;
use Zend\ServiceManager\Factory\FactoryInterface;

class EntityManagerFactory implements FactoryInterface
{
    /**
     * @inheritDoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return EntityManager
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): EntityManager
    {
        $config = $container->get('config');
        return self::getEntityManager($config['doctrine']);
    }

    /**
     * @param array $config
     * @return EntityManager
     */
    public static function getEntityManager(array $config): EntityManager
    {
        $doctrineConfig = Setup::createXMLMetadataConfiguration(
            $config['mapping_directories'],
            $config['dev_mode']
        );
        $entityManager = EntityManager::create($config['params'], $doctrineConfig);

        Type::addType('uuid', UuidType::class);

        $platform = $entityManager->getConnection()->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('uuid', 'uuid');
        $platform->registerDoctrineTypeMapping('enum', 'string');
        return $entityManager;
    }
}
