<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function get(string $projectName): \FoundryCo\Cloudflare\Responses\PagesDomainsDomains
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/domains', \FoundryCo\Cloudflare\Responses\PagesDomainsDomains::class, []);
	}


	/**
	 * Add domain
	 */
	public function create(
		string $projectName,
		\FoundryCo\Cloudflare\Requests\PagesDomainsAddDomainRequest $request,
	): \FoundryCo\Cloudflare\Responses\PagesDomainsDomain
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/domains', \FoundryCo\Cloudflare\Responses\PagesDomainsDomain::class, $request);
	}


	/**
	 * Get domain
	 */
	public function domains(string $domainName, string $projectName): \FoundryCo\Cloudflare\Responses\PagesDomainsDomain
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/domains/' . $domainName, \FoundryCo\Cloudflare\Responses\PagesDomainsDomain::class, []);
	}


	/**
	 * Patch domain
	 */
	public function update(string $domainName, string $projectName): \FoundryCo\Cloudflare\Responses\PagesDomainsDomain
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/domains/' . $domainName, \FoundryCo\Cloudflare\Responses\PagesDomainsDomain::class, null);
	}


	/**
	 * Delete domain
	 */
	public function delete(string $domainName, string $projectName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pages/projects/' . $projectName . '/domains/' . $domainName);
	}
}
