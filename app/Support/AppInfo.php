<?php

namespace App\Support;


use App\Support\Contracts\AppInfoInterface;
use Laravel\Lumen\Application;

class AppInfo implements AppInfoInterface {
	/**
	 * @var Application
	 */
	private $application;
	private static $info;

	public function __construct(Application $application) {
		$this->application = $application;
		$info = file_get_contents(base_path('composer.json'));
		$info = json_decode($info, true);
		self::$info = $info;
	}

	public function name(): string {
		return array_get(self::$info, 'name');
	}

	/**
	 * Returns the version of the app
	 * @return string
	 */
	public function version(): string {
		return array_get(self::$info, 'version');
	}

	/**
	 * Returns the tag name of the app
	 * @return string
	 */
	public function tagName(): string {
		return array_get(self::$info, 'description');
	}
}