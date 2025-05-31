<?php

namespace Huynhdev24\CachingModel\Contracts;

use \Huynhdev24\CachingModel\Contracts\BuilderInterface;

interface Cacheable
{
    public static function primaryCacheKey(): string;

    public static function getCacheKey($id, string $key = null): string;

    public static function getCacheKeyList(): string;

    public static function cacheTimeout(): int;

    public function scopeCacheWithRelation($query);
}
