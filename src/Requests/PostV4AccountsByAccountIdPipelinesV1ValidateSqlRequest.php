<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Validate SQL
 */
readonly class PostV4AccountsByAccountIdPipelinesV1ValidateSqlRequest
{
	public function __construct(
		/** Specifies SQL to validate. */
		public string $sql,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'sql' => $this->sql,
		], fn ($v) => $v !== null);
	}
}
