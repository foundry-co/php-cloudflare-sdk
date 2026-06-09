<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DomainsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Domains
	 */
	public function list(
		?string $zoneName = null,
		?string $service = null,
		?string $hostname = null,
		?string $environment = null,
	): \FoundryCo\Cloudflare\Responses\DomainsWorkersdomainslist
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/domains', \FoundryCo\Cloudflare\Responses\DomainsWorkersdomainslist::class, ['zoneName' => $zoneName ?? null, 'service' => $service ?? null, 'hostname' => $hostname ?? null, 'environment' => $environment ?? null]);
	}


	/**
	 * Attach Domain
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\WorkersdomainsupdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DomainsWorkersdomainsupdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/domains', \FoundryCo\Cloudflare\Responses\DomainsWorkersdomainsupdate::class, $request);
	}


	/**
	 * Get Domain
	 */
	public function get(string $domainId): \FoundryCo\Cloudflare\Responses\DomainsWorkersdomainsget
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/domains/' . $domainId, \FoundryCo\Cloudflare\Responses\DomainsWorkersdomainsget::class, []);
	}


	/**
	 * Detach Domain
	 */
	public function delete(string $domainId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/domains/' . $domainId);
	}
}
