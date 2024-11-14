<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations;

class Package extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'uuid', 
        'tracking_code',
        'commune_id',
        'delivery_type_id',
        'status_id', 
        'store_id',
        'address',
        'can_be_opened',
        'name', 
        'client_first_name',
        'client_last_name',
        'client_phone',
        'client_phone2',
        'cod_to_pay',
        'commission',
        'status_updated_at',
        'delivered_at',
        'delivery_price',
        'extra_weight_price',
        'free_delivery',
        'partner_cod_price',
        'partner_delivery_price',
        'partner_return',
        'price',
        'price_to_pay',
        'return_price',
        'total_price',
        'weight'
     ];


     public function Commune()
     {
        return $this->HasOne(Commune::class,'id','commune_id');
     }
     
     public function Store()
     {
        return $this->BelongsTo(Store::class);
     }

     public function PackageStatus()
     {
        return $this->hasOne(PackagesStatuses::class,'id','status_id');
     }

     public function DeliveryTypes()
     {
        return $this->hasOne(DeliveryTypes::class,'id','delivery_type_id');
     }
}
