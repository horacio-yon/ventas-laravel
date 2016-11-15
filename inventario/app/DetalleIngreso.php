<?php

namespace sisVenta;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    //
    protected $table='detalle_ingreso';
    protected $primaryKey ='iddetalle_ingreso';
    public $timestamps =false;
    protected $fillable = [
    'idarticulo',
    'idingreso',
    'cantidad',
    'precio_compra',
    'precio_venta'

    ];

    protected $guarded =[
    ];
}
