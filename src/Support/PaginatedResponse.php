<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Support;

use ArrayIterator;
use IteratorAggregate;
use Traversable;

/**
 * @template T
 * @implements IteratorAggregate<int, T>
 */
class PaginatedResponse implements IteratorAggregate
{
    /**
     * @param T[] $items
     */
    public function __construct(
        public readonly array $items,
        public readonly int $total,
        public readonly int $page,
        public readonly int $perPage,
        public readonly int $totalPages,
    ) {}

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function hasMorePages(): bool
    {
        return $this->page < $this->totalPages;
    }
}
