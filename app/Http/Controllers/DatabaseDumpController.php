<?php

namespace App\Http\Controllers;

use Spatie\DbDumper\Databases\MySql;
use Illuminate\Support\Facades\Storage;

class DatabaseDumpController extends Controller
{
    public function createDump()
    {
        $filename = 'dump_' . date('Y_m_d_His') . '.sql';

        MySql::create()
            ->setDbName(config('database.connections.mysql.database'))
            ->setUserName(config('database.connections.mysql.username'))
            ->setPassword(config('database.connections.mysql.password'))
            ->dumpToFile(storage_path('app/' . $filename));

        return response()->download(storage_path('app/' . $filename));
    }
}
