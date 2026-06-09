<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkerSubdomainResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get Subdomain
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\WorkerSubdomainSubdomain
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/subdomain', \FoundryCo\Cloudflare\Responses\WorkerSubdomainSubdomain::class, []);
	}


	/**
	 * Create Subdomain
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\WorkerSubdomainCreateSubdomainRequest $request,
	): \FoundryCo\Cloudflare\Responses\WorkerSubdomainSubdomain
	{
		return $this->client->put('/accounts/' . $this->accountId . '/workers/subdomain', \FoundryCo\Cloudflare\Responses\WorkerSubdomainSubdomain::class, $request);
	}


	/**
	 * Delete Subdomain
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/workers/subdomain');
	}
}
