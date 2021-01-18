<?php 

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

<<<<<<< HEAD
class produk extends Model{

	// use ProdukAttributes , ProdukRelations;
	
	protected $table = 'produk';

	protected $dates = ['created_at'];

=======
class Produk extends Model{

	use ProdukAttributes, ProdukRelations;
	
	protected $table = 'produk';

>>>>>>> 01f15497017f2eedb38e9ea72a6b134768fabc0b
	protected $casts= [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'berat' => 'decimal:2'
 
	];
	
}