<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class GithubIntegrationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get repository configuration autofill
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\GitHubIntegrationProviderType $providerType,
		string $providerAccountId,
		string $repoId,
		?string $branch = null,
		?string $rootDirectory = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/builds/repos/' . $providerType . '/' . $providerAccountId . '/' . $repoId . '/config_autofill', null, ['branch' => $branch ?? null, 'rootDirectory' => $rootDirectory ?? null]);
	}
}
