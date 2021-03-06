<?php

/*
 * This file is a part of the PHP Consistent Hashing Bundle.
 *
 * (c) 2013 Eduardo Oliveira
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ESO\CHashingBundle\Hasher;

use ESO\CHashingBundle\Hasher\HasherInterface;

/**
 * Md5 hasher.
 *
 * @author Eduardo Oliveira <entering@gmail.com>
 */
class Md5 implements HasherInterface
{
    /**
     * {@inheritdoc}
     */
    public function hash($str)
    {
        if (!is_string($str)) {
            throw new \InvalidArgumentException(
                'Cannot hash input not string.'
            );
        }

        return substr(md5($str), 0, 8);
    }
}
