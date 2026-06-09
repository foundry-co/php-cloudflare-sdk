<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Pipeline
 */
readonly class PostV4AccountsByAccountIdPipelinesV1PipelinesRequest
{
	public function __construct(
		/** Specifies the name of the Pipeline. */
		public string $name,
		/** Specifies SQL for the Pipeline processing flow. */
		public string $sql,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'sql' => $this->sql,
		], fn ($v) => $v !== null);
	}
}
