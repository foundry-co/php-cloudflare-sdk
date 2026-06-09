<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DEXSyntheticApplicationMonitoringResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Cloudflare colos
	 */
	public function list(
		?string $from = null,
		?string $to = null,
		?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringSortBy $sortBy = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringColos
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/colos', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringColos::class, ['from' => $from ?? null, 'to' => $to ?? null, 'sortBy' => $sortBy ?? null]);
	}


	/**
	 * List Device DEX tests
	 */
	public function dexTests(
		?float $page = null,
		?float $perPage = null,
		?string $testName = null,
		?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringKind $kind = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/devices/dex_tests', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringDetails::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'testName' => $testName ?? null, 'kind' => $kind ?? null]);
	}


	/**
	 * Create Device DEX test
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DeviceDexTestCreateDeviceDexTestRequest $request,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringTest
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dex/devices/dex_tests', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringTest::class, $request);
	}


	/**
	 * Get Device DEX test
	 */
	public function get(string $dexTestId): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringTest
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/devices/dex_tests/' . $dexTestId, \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringTest::class, []);
	}


	/**
	 * Update Device DEX test
	 */
	public function update(
		string $dexTestId,
		\FoundryCo\Cloudflare\Requests\DeviceDexTestUpdateDeviceDexTestRequest $request,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringTest
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dex/devices/dex_tests/' . $dexTestId, \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringTest::class, $request);
	}


	/**
	 * Delete Device DEX test
	 */
	public function delete(string $dexTestId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dex/devices/dex_tests/' . $dexTestId);
	}


	/**
	 * Get the live status of a latest device
	 */
	public function live(
		string $deviceId,
		?float $sinceMinutes = null,
		?string $timeNow = null,
		?string $colo = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/devices/' . $deviceId . '/fleet-status/live', null, ['sinceMinutes' => $sinceMinutes ?? null, 'timeNow' => $timeNow ?? null, 'colo' => $colo ?? null]);
	}


	/**
	 * List device ISPs
	 */
	public function isps(
		string $deviceId,
		?int $page = null,
		?int $perPage = null,
		?string $cursor = null,
		?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringSortBy $sortBy = null,
		?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringSortOrder $sortOrder = null,
		?\DateTimeImmutable $from = null,
		?\DateTimeImmutable $to = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringIsps
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/devices/' . $deviceId . '/isps', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringIsps::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'cursor' => $cursor ?? null, 'sortBy' => $sortBy ?? null, 'sortOrder' => $sortOrder ?? null, 'from' => $from ?? null, 'to' => $to ?? null]);
	}


	/**
	 * List fleet status devices
	 */
	public function devices(
		?string $to = null,
		?string $from = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringSortBy $sortBy = null,
		?string $colo = null,
		?string $deviceId = null,
		?string $mode = null,
		?string $status = null,
		?string $platform = null,
		?string $version = null,
		?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringSource $source = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringDevices
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/fleet-status/devices', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringDevices::class, ['to' => $to ?? null, 'from' => $from ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'sortBy' => $sortBy ?? null, 'colo' => $colo ?? null, 'deviceId' => $deviceId ?? null, 'mode' => $mode ?? null, 'status' => $status ?? null, 'platform' => $platform ?? null, 'version' => $version ?? null, 'source' => $source ?? null]);
	}


	/**
	 * List fleet status details by dimension
	 */
	public function dexFleetStatusLive(
		?float $sinceMinutes = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringLive
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/fleet-status/live', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringLive::class, ['sinceMinutes' => $sinceMinutes ?? null]);
	}


	/**
	 * List fleet status aggregate details by dimension
	 */
	public function overTime(
		?string $to = null,
		?string $from = null,
		?string $colo = null,
		?string $deviceId = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringTime
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/fleet-status/over-time', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringTime::class, ['to' => $to ?? null, 'from' => $from ?? null, 'colo' => $colo ?? null, 'deviceId' => $deviceId ?? null]);
	}


	/**
	 * Get details and aggregate metrics for an http test
	 */
	public function httpTests(
		string $testId,
		?array $deviceId = null,
		?string $from = null,
		?string $to = null,
		?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringInterval $interval = null,
		?string $colo = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/http-tests/' . $testId, \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringDetails::class, ['deviceId' => $deviceId ?? null, 'from' => $from ?? null, 'to' => $to ?? null, 'interval' => $interval ?? null, 'colo' => $colo ?? null]);
	}


	/**
	 * Get percentiles for an http test
	 */
	public function percentiles(
		string $testId,
		?array $deviceId = null,
		?string $from = null,
		?string $to = null,
		?string $colo = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringPercentiles
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/http-tests/' . $testId . '/percentiles', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringPercentiles::class, ['deviceId' => $deviceId ?? null, 'from' => $from ?? null, 'to' => $to ?? null, 'colo' => $colo ?? null]);
	}


	/**
	 * List DEX test analytics
	 */
	public function overview(
		?string $colo = null,
		?string $testName = null,
		?array $deviceId = null,
		?string $registrationId = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringKind $kind = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringOverview
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/tests/overview', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringOverview::class, ['colo' => $colo ?? null, 'testName' => $testName ?? null, 'deviceId' => $deviceId ?? null, 'registrationId' => $registrationId ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'kind' => $kind ?? null]);
	}


	/**
	 * Get count of devices targeted
	 */
	public function uniqueDevices(
		?string $testName = null,
		?array $deviceId = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringDevices
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/tests/unique-devices', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringDevices::class, ['testName' => $testName ?? null, 'deviceId' => $deviceId ?? null]);
	}


	/**
	 * Get details for a specific traceroute test run
	 */
	public function networkPath(
		string $testResultId,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringPath
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/traceroute-test-results/' . $testResultId . '/network-path', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringPath::class, []);
	}


	/**
	 * Get details and aggregate metrics for a traceroute test
	 */
	public function tracerouteTests(
		string $testId,
		?array $deviceId = null,
		?string $from = null,
		?string $to = null,
		?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringInterval $interval = null,
		?string $colo = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/traceroute-tests/' . $testId, \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringDetails::class, ['deviceId' => $deviceId ?? null, 'from' => $from ?? null, 'to' => $to ?? null, 'interval' => $interval ?? null, 'colo' => $colo ?? null]);
	}


	/**
	 * Get network path breakdown for a traceroute test
	 */
	public function dexEndpointsTracerouteTestNetworkPath(
		string $testId,
		?string $deviceId = null,
		?string $from = null,
		?string $to = null,
		?\FoundryCo\Cloudflare\Enums\DEXSyntheticApplicationMonitoringInterval $interval = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringPath
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/traceroute-tests/' . $testId . '/network-path', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringPath::class, ['deviceId' => $deviceId ?? null, 'from' => $from ?? null, 'to' => $to ?? null, 'interval' => $interval ?? null]);
	}


	/**
	 * Get percentiles for a traceroute test
	 */
	public function dexEndpointsTracerouteTestPercentiles(
		string $testId,
		?array $deviceId = null,
		?string $from = null,
		?string $to = null,
		?string $colo = null,
	): \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringPercentiles
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/traceroute-tests/' . $testId . '/percentiles', \FoundryCo\Cloudflare\Responses\DEXSyntheticApplicationMonitoringPercentiles::class, ['deviceId' => $deviceId ?? null, 'from' => $from ?? null, 'to' => $to ?? null, 'colo' => $colo ?? null]);
	}
}
