<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Elasticquent\ElasticquentTrait;

class Torrent extends Model
{
    use ElasticquentTrait;
}
