<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountLoadBalancerSearchResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Search Resources
	 */
	public function list(
		?string $query = null,
		?\FoundryCo\Cloudflare\Enums\AccountLoadBalancerSearchReferences $references = null,
		?float $page = null,
		?float $perPage = null,
	): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerSearchResources
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/search', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerSearchResources::class, ['query' => $query ?? null, 'references' => $references ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}
}
