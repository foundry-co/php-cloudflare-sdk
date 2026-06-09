<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WAFPackagesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List WAF packages
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\WAFPackagesOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\WAFPackagesDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\WAFPackagesMatch $match = null,
		?string $name = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/waf/packages', null, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'match' => $match ?? null, 'name' => $name ?? null]);
	}


	/**
	 * Get a WAF package
	 */
	public function get(string $packageId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/firewall/waf/packages/' . $packageId, null, []);
	}


	/**
	 * Update a WAF package
	 */
	public function update(
		string $packageId,
		\FoundryCo\Cloudflare\Requests\WafPackagesUpdateAWafPackageRequest $request,
	): \FoundryCo\Cloudflare\Responses\WAFPackagesPackage
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/firewall/waf/packages/' . $packageId, \FoundryCo\Cloudflare\Responses\WAFPackagesPackage::class, $request);
	}
}
