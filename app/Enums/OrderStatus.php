<?php

namespace App\Enums;

enum OrderStatus: string
{
    
    case traveling = 'traveling';

    case canceled = 'canceled';

    case waitingpayment = 'waitingpayment';

    case arrive = 'arrive';



    // Método útil para obtener todos los valores como array
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    // Método útil para mostrar etiquetas legibles en el frontend
    public function label(): string
    {
        return match($this) {
            self::traveling => 'traveling',
            self::canceled => 'canceled',
            self::waitingpayment => 'waitingpayment',
            self::arrive => 'arrive',            
        };
    }
}