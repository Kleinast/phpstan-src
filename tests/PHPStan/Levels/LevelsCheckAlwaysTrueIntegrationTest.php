<?php declare(strict_types = 1);

namespace PHPStan\Levels;

use PHPStan\Testing\LevelsTestCase;

/**
 * @group exec
 */
class LevelsCheckAlwaysTrueIntegrationTest extends LevelsTestCase
{

	public function dataTopics(): array
	{
		return [
			['unreachable'],
		];
	}

	public function getDataPath(): string
	{
		return __DIR__ . '/data';
	}

	public function getPhpStanExecutablePath(): string
	{
		return __DIR__ . '/../../../bin/phpstan';
	}

	public function getPhpStanConfigPath(): string
	{
		return __DIR__ . '/alwaysTrue.neon';
	}

	protected function getResultSuffix(): string
	{
		return '-alwaysTrue';
	}

}
