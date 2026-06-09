<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DestinationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get Destinations
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\DestinationsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\DestinationsOrderBy $orderBy = null,
	): \FoundryCo\Cloudflare\Responses\DestinationsDestinationlist
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/observability/destinations', \FoundryCo\Cloudflare\Responses\DestinationsDestinationlist::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'orderBy' => $orderBy ?? null]);
	}


	/**
	 * Create Destination
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DestinationcreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DestinationsDestinationcreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/observability/destinations', \FoundryCo\Cloudflare\Responses\DestinationsDestinationcreate::class, $request);
	}


	/**
	 * Update Destination
	 */
	public function update(
		string $slug,
		\FoundryCo\Cloudflare\Requests\DestinationupdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DestinationsDestinationupdate
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/workers/observability/destinations/' . $slug, \FoundryCo\Cloudflare\Responses\DestinationsDestinationupdate::class, $request);
	}


	/**
	 * Delete Destination
	 */
	public function delete(string $slug): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/observability/destinations/' . $slug);
	}
}
