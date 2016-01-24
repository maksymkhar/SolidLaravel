<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24/01/16
 * Time: 17:03
 */

namespace App\Transformers;

class InvoicesTransformer extends Transformer
{
    public function transform($database_invoices)
    {
        return $database_invoices;
    }
}