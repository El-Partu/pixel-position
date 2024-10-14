<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;
    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tag(string $name){
        $tag = Tag::firstOrCreate(["name"=> $name]);

        $this->tags()->attach($tag);
    }
    public function tags(): BelongsToMany{
        return $this->belongsToMany(related: Tag::class);
    }
}
