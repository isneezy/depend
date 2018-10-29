<?php

namespace App\Repositories;


use App\Models\User;

class UserRepository extends EloquentRepository {
	protected $modelClassName = User::class;
}