<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DomainDiscoveryResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Check domain availability
	 */
	public function create(\FoundryCo\Cloudflare\Requests\RegistrarDomainDiscoveryCheckRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/registrar/domain-check', null, $request);
	}


	/**
	 * Search for available domains
	 */
	public function list(?string $q = null, ?array $extensions = null, ?int $limit = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/registrar/domain-search', null, ['q' => $q ?? null, 'extensions' => $extensions ?? null, 'limit' => $limit ?? null]);
	}
}
