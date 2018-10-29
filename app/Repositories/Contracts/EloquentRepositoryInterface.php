<?php

namespace App\Repositories\Contracts;


use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface {
	/**
	 * EloquentRepositoryInterface constructor.
	 *
	 * @param Model $model
	 */
	public function __construct($model = null);
}