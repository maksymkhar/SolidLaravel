<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24/01/16
 * Time: 17:04
 */

abstract class Transformer
{
    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'], $items);
    }
    public abstract function transform($item);
}