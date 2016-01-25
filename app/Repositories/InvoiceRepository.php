<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 24/01/16
 * Time: 17:00
 */

namespace App\Repositories;
use App\Invoices;

/**
 * Class InvoiceRepository
 * @package App\Repositories
 */
class InvoiceRepository extends Repository
{
    /**
     * @return mixed
     */
    function model()
    {
        return Invoices::class;
    }
}