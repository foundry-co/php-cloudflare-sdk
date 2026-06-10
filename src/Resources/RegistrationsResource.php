<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RegistrationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List registrations
	 */
	public function list(
		?array $userid = null,
		?string $seenAfter = null,
		?string $seenBefore = null,
		?\FoundryCo\Cloudflare\Enums\RegistrationsStatus $status = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\RegistrationsSortBy $sortBy = null,
		?\FoundryCo\Cloudflare\Enums\RegistrationsSortOrder $sortOrder = null,
		?string $cursor = null,
		?array $id = null,
		?string $deviceid = null,
		?string $include = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/registrations', \FoundryCo\Cloudflare\Responses\ListRegistrations::class, ['userid' => $userid ?? null, 'seenAfter' => $seenAfter ?? null, 'seenBefore' => $seenBefore ?? null, 'status' => $status ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'sortBy' => $sortBy ?? null, 'sortOrder' => $sortOrder ?? null, 'cursor' => $cursor ?? null, 'id' => $id ?? null, 'deviceid' => $deviceid ?? null, 'include' => $include ?? null]);
	}


	/**
	 * Revoke registrations
	 */
	public function create(?array $id = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/registrations/revoke', null, null);
	}


	/**
	 * Unrevoke registrations
	 */
	public function unrevoke(?array $id = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/registrations/unrevoke', null, null);
	}


	/**
	 * Get registration
	 */
	public function get(string $registrationId, ?string $include = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/registrations/' . $registrationId, \FoundryCo\Cloudflare\Responses\GetRegistration::class, ['include' => $include ?? null]);
	}


	/**
	 * Delete registration
	 */
	public function delete(string $registrationId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/registrations/' . $registrationId);
	}
}
