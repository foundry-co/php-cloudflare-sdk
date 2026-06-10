<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustHostnameRouteResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List hostname routes
	 */
	public function list(
		?string $id = null,
		?string $hostname = null,
		?string $tunnelId = null,
		?string $comment = null,
		?string $existedAt = null,
		?bool $isDeleted = null,
		?float $perPage = null,
		?float $page = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zerotrust/routes/hostname', \FoundryCo\Cloudflare\Responses\ZeroTrustNetworksRouteHostnameList::class, ['id' => $id ?? null, 'hostname' => $hostname ?? null, 'tunnelId' => $tunnelId ?? null, 'comment' => $comment ?? null, 'existedAt' => $existedAt ?? null, 'isDeleted' => $isDeleted ?? null, 'perPage' => $perPage ?? null, 'page' => $page ?? null]);
	}


	/**
	 * Create hostname route
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ZeroTrustNetworksRouteHostnameCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/zerotrust/routes/hostname', null, $request);
	}


	/**
	 * Get hostname route
	 */
	public function get(string $hostnameRouteId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/zerotrust/routes/hostname/' . $hostnameRouteId, null, []);
	}


	/**
	 * Update hostname route
	 */
	public function update(
		string $hostnameRouteId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustNetworksRouteHostnameUpdateRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/zerotrust/routes/hostname/' . $hostnameRouteId, null, $request);
	}


	/**
	 * Delete hostname route
	 */
	public function delete(string $hostnameRouteId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/zerotrust/routes/hostname/' . $hostnameRouteId);
	}
}
