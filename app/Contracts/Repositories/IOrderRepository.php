<?php

namespace OFS\Contracts\Repositories;

use Illuminate\Container\Container;
use Prettus\Repository\Contracts\RepositoryInterface;
use OFS\Entities\Order;

interface IOrderRepository extends RepositoryInterface
{
    /**
     * IOrderRepository constructor.
     * @param Container $app
     * @param Order $model
     */
    public function __construct(Container $app, Order $model);
}