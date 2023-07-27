<?php

namespace App\Models;

use App\Models\Subdistrict;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HarvestData extends Model
{
    use HasFactory;

    public function subdistrict(): BelongsTo
    {
        return $this->belongsTo(Subdistrict::class);
    }
}
