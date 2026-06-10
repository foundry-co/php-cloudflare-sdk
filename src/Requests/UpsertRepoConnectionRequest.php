<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create or update repository connection
 */
readonly class UpsertRepoConnectionRequest
{
	public function __construct(
		/** Provider account identifier. */
		public string $providerAccountId,
		public string $providerAccountName,
		public \FoundryCo\Cloudflare\Enums\UpsertRepoConnectionRequestProviderType $providerType,
		/** Repository identifier. */
		public string $repoId,
		public string $repoName,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'provider_account_id' => $this->providerAccountId,
		    'provider_account_name' => $this->providerAccountName,
		    'provider_type' => $this->providerType->value,
		    'repo_id' => $this->repoId,
		    'repo_name' => $this->repoName,
		], fn ($v) => $v !== null);
	}
}
