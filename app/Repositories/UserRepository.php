<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25/01/16
 * Time: 16:19
 */

namespace App\Repositories;
use App\User;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepository extends Repository
{
    /**
     * @return mixed
     */
    function model()
    {
        return User::class;
    }
}