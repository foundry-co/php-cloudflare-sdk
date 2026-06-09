<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PhysicalDevicesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List devices
	 */
	public function list(
		?string $cursor = null,
		?\FoundryCo\Cloudflare\Enums\PhysicalDevicesSortBy $sortBy = null,
		?\FoundryCo\Cloudflare\Enums\PhysicalDevicesSortOrder $sortOrder = null,
		?string $lastSeenUseremail = null,
		?string $seenAfter = null,
		?string $seenBefore = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\PhysicalDevicesActiveRegistrations $activeRegistrations = null,
		?array $id = null,
		?string $include = null,
	): \FoundryCo\Cloudflare\Responses\PhysicalDevicesDevices
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/physical-devices', \FoundryCo\Cloudflare\Responses\PhysicalDevicesDevices::class, ['cursor' => $cursor ?? null, 'sortBy' => $sortBy ?? null, 'sortOrder' => $sortOrder ?? null, 'lastSeenUseremail' => $lastSeenUseremail ?? null, 'seenAfter' => $seenAfter ?? null, 'seenBefore' => $seenBefore ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'activeRegistrations' => $activeRegistrations ?? null, 'id' => $id ?? null, 'include' => $include ?? null]);
	}


	/**
	 * Get device
	 */
	public function get(string $deviceId, ?string $include = null): \FoundryCo\Cloudflare\Responses\PhysicalDevicesDevice
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/physical-devices/' . $deviceId, \FoundryCo\Cloudflare\Responses\PhysicalDevicesDevice::class, ['include' => $include ?? null]);
	}


	/**
	 * Delete device
	 */
	public function delete(string $deviceId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/physical-devices/' . $deviceId);
	}


	/**
	 * Revoke device registrations
	 */
	public function create(string $deviceId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/physical-devices/' . $deviceId . '/revoke', null, null);
	}


	/**
	 * Delete registrations
	 */
	public function registrations(?array $id = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/registrations');
	}
}
