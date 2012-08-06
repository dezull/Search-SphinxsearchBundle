<?php

namespace Search\SphinxsearchBundle\Services\Search;

use Countable, IteratorAggregate;

interface CollectionInterface extends Countable, IteratorAggregate
{
    function getIterator();

    function count();

    /**
     * Get index items by index name
     *
     * @param string Index name
     * @return SearchResultInterface
     */
    function get($indexName);
}
