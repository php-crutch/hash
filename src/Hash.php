<?php

declare(strict_types=1);

namespace Crutch\Hash;

interface Hash
{
    /**
     * @param string $value
     * @return string
     */
    public function hash(string $value): string;

    /**
     * @param string $hash
     * @param string $value
     * @return bool
     */
    public function verify(string $hash, string $value): bool;

    /**
     * @param string $hash
     * @return bool
     */
    public function isNeedRehash(string $hash): bool;
}
