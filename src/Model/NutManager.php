<?php

namespace App\Model;

use App\Model\Connection;
use PDO;

class NutManager extends AbstractManager {

    public const TABLE = 'nut';

    public function selectAll(string $orderBy = '', string $direction = 'ASC'): array
    {
        $query = 'SELECT * FROM ' . static::TABLE;
        if ($orderBy) {
            $query .= ' ORDER BY ' . $orderBy . ' ' . $direction;
        }

        return $this->pdo->query($query)->fetchAll();
    }

}