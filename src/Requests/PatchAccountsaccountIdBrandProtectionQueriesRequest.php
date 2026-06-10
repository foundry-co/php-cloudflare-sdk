<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update saved string queries by ID
 */
readonly class PatchAccountsaccountIdBrandProtectionQueriesRequest
{
	public function __construct(
		/** The query ID to update (required when updating tag or scan) */
		public ?int $id = null,
		/** Whether to scan matches */
		public ?bool $scan = null,
		/** Updated pattern match constraints. When provided, replaces the existing string_matches. */
		public ?array $stringMatches = null,
		/** Query tag. Required as identifier when updating string_matches. */
		public ?string $tag = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id,
		    'scan' => $this->scan,
		    'string_matches' => $this->stringMatches,
		    'tag' => $this->tag,
		], fn ($v) => $v !== null);
	}
}
