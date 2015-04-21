<?php

/**
 * Category model collection
 */

namespace Octo\Categories\Model;

use Octo;
use b8\Model\Collection;

/**
 * Category Model Collection
 */
class CategoryCollection extends Collection
{
    /**
     * Add a Category model to the collection.
     * @param string $key
     * @param Category $value
     * @return CategoryCollection
     */
    public function add($key, Category $value)
    {
        return parent::add($key, $value);
    }

    /**
     * @param $key
     * @return Category|null
     */
    public function get($key)
    {
        return parent::get($key);
    }
}
