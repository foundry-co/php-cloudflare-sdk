<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RegistrarDomainsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List domains
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\RegistrarDomainsDomains
	{
		return $this->client->get('/accounts/' . $this->accountId . '/registrar/domains', \FoundryCo\Cloudflare\Responses\RegistrarDomainsDomains::class, []);
	}


	/**
	 * Get domain
	 */
	public function get(string $domainName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/registrar/domains/' . $domainName, null, []);
	}


	/**
	 * Update domain
	 */
	public function update(
		string $domainName,
		\FoundryCo\Cloudflare\Requests\RegistrarDomainsUpdateDomainRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/registrar/domains/' . $domainName, null, $request);
	}
}
