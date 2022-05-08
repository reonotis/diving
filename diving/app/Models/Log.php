<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Log extends Model
{
    use HasFactory;

    /**
     *
     * @return object $result
     */
    public static function getByCustomer($id)
    {
        $select = '*';
        $result = self::select(DB::raw($select))
        ->where('customer_id', $id)
        ->where('delete_flag', 0)
        ->orderBy('num', 'DESC')
        ->get();

        return $result;
    }
}
