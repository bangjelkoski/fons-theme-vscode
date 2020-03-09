<?php

namespace App\Models\Tenant;

use Model;

class Layout extends Model
{
    use Trait;

    private function make($text, $type)
    {
        Session::flash('demo', [
            'text' => $text,
            'type' => $type,
        ]);

        return $this;
    }

    protected $fillable = [
        'code',
    ];

    public function save(Coupon $coupon)
    {
        return $coupon->save();
    }

    public function blocks()
    {
        return $this->hasMany(Block::class);
    }

    public function message() {
        return str_repeat('Hello!', 5);
    }
}
