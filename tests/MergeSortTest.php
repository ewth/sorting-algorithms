<?php

namespace Sort;

use PHPUnit\Framework\TestCase;

class MergeSortTest extends TestCase
{
    public function testMergeSortSortsItems()
    {
        $items = [5, 3, 6, 1, 2, 4, 6, 9, 8, 1, 7, 1, 5];
        $sort = new MergeSort;
        $result = $sort->sort($items);
        sort($items);
        $this->assertSame($items, $result->getSorted());
    }

    public function testMergeSortReturnsSortTime()
    {
        $items = [5, 3, 6, 1, 2, 4, 6, 9, 8, 1, 7, 1, 5];
        $sort = new MergeSort;
        $result = $sort->sort($items);
        $this->assertGreaterThan(0, $result->getTimeTaken());
    }

    public function testMergeSortReturnsSwapCount()
    {
        $items = [5, 3, 6, 1, 2, 4, 6, 9, 8, 1, 7, 1, 5];
        $sort = new MergeSort;
        $result = $sort->sort($items);
        $this->assertGreaterThanOrEqual(1, $result->getSwapsPerformed());
    }
}
