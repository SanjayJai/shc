<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    protected $fillable = ['title', 'description', 'image'];

    // Automatically delete image from storage on model deletion
    protected static function booted(): void
    {
        static::deleting(function (Service $service) {
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
        });
    }
}
