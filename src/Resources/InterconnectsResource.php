<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class InterconnectsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List existing interconnects
	 */
	public function list(?string $site = null, ?string $type = null, ?int $cursor = null, ?int $limit = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cni/interconnects', null, ['site' => $site ?? null, 'type' => $type ?? null, 'cursor' => $cursor ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Create a new interconnect
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cni/interconnects', null, null);
	}


	/**
	 * Get information about an interconnect object
	 */
	public function get(string $icon): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cni/interconnects/' . $icon, null, []);
	}


	/**
	 * Delete an interconnect object
	 */
	public function delete(string $icon): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cni/interconnects/' . $icon);
	}


	/**
	 * Generate the Letter of Authorization (LOA) for a given interconnect
	 */
	public function loa(string $icon): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cni/interconnects/' . $icon . '/loa', null, []);
	}


	/**
	 * Get the current status of an interconnect object
	 */
	public function status(string $icon): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cni/interconnects/' . $icon . '/status', null, []);
	}
}
