<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RepositoryConnectionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Create or update repository connection
	 */
	public function update(\FoundryCo\Cloudflare\Requests\UpsertRepoConnectionRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/builds/repos/connections', null, $request);
	}


	/**
	 * Delete repository connection
	 */
	public function delete(string $repoConnectionUuid): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/builds/repos/connections/' . $repoConnectionUuid);
	}
}
