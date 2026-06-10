<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PagesDomainsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get domains
	 */
	public function get(string $projectName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/domains', \FoundryCo\Cloudflare\Responses\PagesDomainsGetDomains::class, []);
	}


	/**
	 * Add domain
	 */
	public function create(
		string $projectName,
		\FoundryCo\Cloudflare\Requests\PagesDomainsAddDomainRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/domains', \FoundryCo\Cloudflare\Responses\PagesDomainsAddDomain::class, $request);
	}


	/**
	 * Get domain
	 */
	public function domains(string $domainName, string $projectName): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/domains/' . $domainName, \FoundryCo\Cloudflare\Responses\PagesDomainsGetDomain::class, []);
	}


	/**
	 * Patch domain
	 */
	public function update(string $domainName, string $projectName): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/domains/' . $domainName, \FoundryCo\Cloudflare\Responses\PagesDomainsPatchDomain::class, null);
	}


	/**
	 * Delete domain
	 */
	public function delete(string $domainName, string $projectName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/domains/' . $domainName);
	}
}
