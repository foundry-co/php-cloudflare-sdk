<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneLockdownResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Zone Lockdown rules
	 */
	public function list(
		?float $page = null,
		mixed $description = null,
		mixed $modifiedOn = null,
		mixed $ip = null,
		mixed $priority = null,
		mixed $uriSearch = null,
		mixed $ipRangeSearch = null,
		?float $perPage = null,
		?\DateTimeImmutable $createdOn = null,
		?string $descriptionSearch = null,
		?string $ipSearch = null,
	): \FoundryCo\Cloudflare\Responses\ZoneLockdownRules
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/lockdowns', \FoundryCo\Cloudflare\Responses\ZoneLockdownRules::class, ['page' => $page ?? null, 'description' => $description ?? null, 'modifiedOn' => $modifiedOn ?? null, 'ip' => $ip ?? null, 'priority' => $priority ?? null, 'uriSearch' => $uriSearch ?? null, 'ipRangeSearch' => $ipRangeSearch ?? null, 'perPage' => $perPage ?? null, 'createdOn' => $createdOn ?? null, 'descriptionSearch' => $descriptionSearch ?? null, 'ipSearch' => $ipSearch ?? null]);
	}


	/**
	 * Create a Zone Lockdown rule
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZoneLockdownCreateAZoneLockdownRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLockdownRule
	{
		return $this->client->post('/zones/' . $this->zoneId . '/firewall/lockdowns', \FoundryCo\Cloudflare\Responses\ZoneLockdownRule::class, $request);
	}


	/**
	 * Get a Zone Lockdown rule
	 */
	public function get(string $lockDownsId): \FoundryCo\Cloudflare\Responses\ZoneLockdownRule
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/lockdowns/' . $lockDownsId, \FoundryCo\Cloudflare\Responses\ZoneLockdownRule::class, []);
	}


	/**
	 * Update a Zone Lockdown rule
	 */
	public function update(
		string $lockDownsId,
		\FoundryCo\Cloudflare\Requests\ZoneLockdownUpdateAZoneLockdownRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLockdownRule
	{
		return $this->client->put('/zones/' . $this->zoneId . '/firewall/lockdowns/' . $lockDownsId, \FoundryCo\Cloudflare\Responses\ZoneLockdownRule::class, $request);
	}


	/**
	 * Delete a Zone Lockdown rule
	 */
	public function delete(string $lockDownsId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/firewall/lockdowns/' . $lockDownsId);
	}
}
