<?php
namespace App\Support\Contracts;


interface AppInfoInterface {
	/**
	 * Returns the name of the app
	 * @return string
	 */
	public function name (): string;
	/**
	 * Returns the version of the app
	 * @return string
	 */
	public function version (): string;

	/**
	 * Returns the tag name of the app
	 * @return string
	 */
	public function tagName (): string;
}