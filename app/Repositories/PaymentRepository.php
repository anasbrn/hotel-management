<?php

namespace App\Repositories;

use App\Models\Payment;

class PaymentRepository
{
    public function all()
    {
        return Payment::all();
    }

    public function create(array $data)
    {
        return Payment::create($data);
    }

    public function find($id)
    {
        return Payment::findOrFail($id);
    }
}
