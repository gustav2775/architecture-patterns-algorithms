<?php

declare(strict_types=1);

namespace AbstractFactory\Service;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Entity\Order;
use AbstractFactory\Entity\User;

class Service
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;
    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;

    /**
     * OrderService constructor. В конструктор передается фабрика, которая может
     * нам создать любой репозиторий, который нам нужен. Данная фабрика уже
     * знает, с каким хранилищем должны работать репозитории, которые она будет
     * создавать. При вызове данного конструктора передается фабрика, которая
     * создат репозитории определенного типа, которые работают с определенным
     * хранилищем.
     * @param RepositoryFactoryInterface $repositoryFactory
     */
    public function __construct(RepositoryFactoryInterface $repositoryFactory)
    {
        $this->userRepository = $repositoryFactory->createUserRepository();
        $this->orderRepository = $repositoryFactory->createOrderRepository();
    }

    /**
     * Действия для добавления пользователя (просто пример использования).
     */
    public function addUser(): void {
    }

    /**
     * Действия для добавления заказа (просто пример использования).
     */
    public function addOrder(): void {
    }
}