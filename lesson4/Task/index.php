<?php

declare(strict_types=1);

namespace AbstractFactory;

use AbstractFactory\Factory\Factory;
use AbstractFactory\DB\{MySQLFactory,OracleFactory,PostgreSQLFactory};

$postgresRepositoryFactory = new Factory(new PostgreSQLFactory());
$MySqlRepositoryFactory = new Factory(new MySQLFactory());
$OracleRepositoryFactory = new Factory(new OracleFactory());