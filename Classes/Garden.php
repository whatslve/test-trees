<?php

/**
 * Garden class
 */
class Garden
{
    /**
     * @var array |
     */
    private $trees = [];
    /**
     * @var array
     */
    private $fruits = [];

    /**
     * @param array $trees
     */
    public function __construct(array $trees)
    {
        $this->trees = $trees;
    }

    /**
     * @param array $tree
     * @return void
     */
    public function addTree(array $tree)
    {
        $this->trees[] = $tree;
    }

    /**
     * @return array|int[]
     */
    public function collectFruits() : array
    {
        $fruits = ['apples' => 0, 'pears' => 0];
        foreach ($this->trees as $key => $treesItem) {
            if (is_array($treesItem)) {
                if ($key === 'apples') {
                    $fruits['apples'] += rand(40, 50);
                }

                if ($key === 'pears') {
                    $fruits['pears'] += rand(0, 20);
                }
            }
        }
        $this->fruits = $fruits;
        return $this->fruits;
    }

    /**
     * @return array
     */
    public function countFruitsByEachTree() : array
    {
        $count = [];
        foreach ($this->trees as $key => $treesItem) {
            if (is_array($treesItem)) {
                $count[$key] = count($treesItem);
            }
        }
        return $count;
    }

    /**
     * @return array
     */
    public function massOfFruitsByEachTree() : array
    {
        $sum = [];
        foreach ($this->fruits as $key => $fruitItem) {
            if ($key == 'apples') {
                $sum[$key] = $fruitItem * 150;
            }
            if($key === 'pears') {
                $sum[$key] = $fruitItem * 130;
            }
        }
        return $sum;
    }
}