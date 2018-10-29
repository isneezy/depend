<?php

namespace App\Repositories;


use App\Repositories\Contracts\EloquentRepositoryInterface;
use App\Models\Model;

abstract class EloquentRepository implements EloquentRepositoryInterface {

	/**
	 * @var Model
	 */
	private $model;
	/**
	 * @var string
	 */
	protected $modelClassName;

	/**
	 * UserRepository constructor.
	 *
	 * @param Model $model
	 */
	public function __construct($model = null ) {
		if (!class_exists($this->modelClassName)) {
			throw new EloquentRepositoryException(500, "model class name does not exists");
		}
		$this->setModel($model);
	}

	/**
	 * @return Model
	 */
	public function getModel(): Model {
		return $this->model;
	}

	/**
	 * @param Model $model
	 */
	public function setModel($model): void {
		$this->model = is_null($model) ? app()->make($this->modelClassName) : $model;
	}

	/**
	 * @param $identifiable
	 *
	 * @return Model | mixed
	 */
	public function findByID ($identifiable) {
		return $this->model->newQuery()->find($identifiable);
	}
}