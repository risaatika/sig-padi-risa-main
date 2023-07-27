<?php

namespace App\Models;

use App\Models\HarvestData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subdistrict extends Model
{
    use HasFactory;

    public function harvestData(): HasMany
    {
        return $this->hasMany(HarvestData::class);
    }
}
