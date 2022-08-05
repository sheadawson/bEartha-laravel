<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Amantinetti\InfluxDB\Facades\InfluxDB;
//use Amantinetti\InfluxDB\Providers\ServiceProvider;
//use InfluxDB2\Client as InfluxDB;

class Device extends Model
{
    use HasFactory;

    public function getInfluxData()
    {
        $query_api = InfluxDB::createQueryApi();
        $result = $query_api
            ->query(
                'from(bucket:"bEartha") |> range(start: 1970-01-01T00:00:00.000000001Z) |> last()'
            );
        // ->select('field1')
        // ->from('measurement1')
        // //
        // ->getResultSet();
        //$result = $query_api->query('from(bucket:"my-bucket") |> range(start: 1970-01-01T00:00:00.000000001Z) |> last()');
        return $result;
        // $something = new InfluxDB\Point();
    }
}
