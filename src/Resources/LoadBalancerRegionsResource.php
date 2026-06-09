<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LoadBalancerRegionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Regions
	 */
	public function list(
		?string $subdivisionCode = null,
		?string $subdivisionCodeA2 = null,
		?string $countryCodeA2 = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/regions', null, ['subdivisionCode' => $subdivisionCode ?? null, 'subdivisionCodeA2' => $subdivisionCodeA2 ?? null, 'countryCodeA2' => $countryCodeA2 ?? null]);
	}


	/**
	 * Get Region
	 */
	public function get(\FoundryCo\Cloudflare\Enums\LoadBalancerRegionsRegionId $regionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/regions/' . $regionId, null, []);
	}
}
