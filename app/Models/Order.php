<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{

    use HasFactory;
    /**
     * ORDER ATTRIBUTES
     * $this->attributes['id'] - int - contains the oreder primary key (id)
     * $this->attributes['status'] - string - contains the order status (traveling, canceled, waitingpayment, arrive)
     * $this->attributes['total'] - int - contains the order total price
     */

    protected $fillable = ['status', 'total'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId($id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getStatus(): string
    {
        return $this->attributes['status'];
    }

    public function setStatus($status): void
    {
        $this->attributes['status'] = $status;
    }

    public function getTotal(): int
    {
        return $this->attributes['total'];
    }

    public function setTotal($total): void
    {
        $this->attributes['total'] = $total;
    }

}
