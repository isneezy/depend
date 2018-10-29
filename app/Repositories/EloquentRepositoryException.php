<?php

namespace App\Repositories;


use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class EloquentRepositoryException extends HttpException {
	public function __construct( int $statusCode, string $message = null, \Exception $previous = null, array $headers = array(), ?int $code = 0 ) {
		parent::__construct( $statusCode, $message, $previous, $headers, $code );
	}
}