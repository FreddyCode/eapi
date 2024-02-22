<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
    	//return ['errors' => 'Product Not Belongs to User'];
        return response()->json([
            'error' => 'Product Not Belongs to User.'
        ]);
    }
}
