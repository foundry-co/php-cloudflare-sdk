<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ObservatoryResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get quota and availability
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/speed_api/availabilities', \FoundryCo\Cloudflare\Responses\SpeedGetAvailabilities::class, []);
	}


	/**
	 * List tested webpages
	 */
	public function pages(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/speed_api/pages', \FoundryCo\Cloudflare\Responses\SpeedListPages::class, []);
	}


	/**
	 * List page test history
	 */
	public function get(string $url, ?int $page = null, ?int $perPage = null, mixed $region = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/speed_api/pages/' . $url . '/tests', \FoundryCo\Cloudflare\Responses\SpeedListTestHistory::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'region' => $region ?? null]);
	}


	/**
	 * Start page test
	 */
	public function create(string $url, \FoundryCo\Cloudflare\Requests\SpeedCreateTestRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/speed_api/pages/' . $url . '/tests', \FoundryCo\Cloudflare\Responses\SpeedCreateTest::class, $request);
	}


	/**
	 * Delete all page tests
	 */
	public function delete(string $url, mixed $region = null): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/speed_api/pages/' . $url . '/tests');
	}


	/**
	 * Get a page test result
	 */
	public function tests(string $url, string $testId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/speed_api/pages/' . $url . '/tests/' . $testId, \FoundryCo\Cloudflare\Responses\SpeedGetTest::class, []);
	}


	/**
	 * List core web vital metrics trend
	 */
	public function trend(
		string $url,
		?\FoundryCo\Cloudflare\Enums\ObservatoryRegion $region = null,
		?\FoundryCo\Cloudflare\Enums\ObservatoryDeviceType $deviceType = null,
		?\DateTimeImmutable $start = null,
		?\DateTimeImmutable $end = null,
		?string $tz = null,
		?string $metrics = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/speed_api/pages/' . $url . '/trend', \FoundryCo\Cloudflare\Responses\SpeedListPageTrend::class, ['region' => $region ?? null, 'deviceType' => $deviceType ?? null, 'start' => $start ?? null, 'end' => $end ?? null, 'tz' => $tz ?? null, 'metrics' => $metrics ?? null]);
	}


	/**
	 * Get a page test schedule
	 */
	public function schedule(string $url, mixed $region = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/speed_api/schedule/' . $url, \FoundryCo\Cloudflare\Responses\SpeedGetScheduledTest::class, ['region' => $region ?? null]);
	}


	/**
	 * Create scheduled page test
	 */
	public function speedCreateScheduledTest(
		string $url,
		mixed $region = null,
		?\FoundryCo\Cloudflare\Enums\ObservatoryFrequency $frequency = null,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/speed_api/schedule/' . $url, \FoundryCo\Cloudflare\Responses\SpeedCreateScheduledTest::class, null);
	}


	/**
	 * Delete scheduled page test
	 */
	public function speedDeleteTestSchedule(string $url, mixed $region = null): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/speed_api/schedule/' . $url);
	}
}
