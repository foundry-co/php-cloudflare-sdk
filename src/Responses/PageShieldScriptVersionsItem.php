<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The version of the analyzed script.
 */
readonly class PageShieldScriptVersionsItem
{
	public function __construct(
		public ?array $cryptominingScore = null,
		public mixed $dataflowScore = null,
		public ?array $fetchedAt = null,
		public ?array $hash = null,
		public ?array $jsIntegrityScore = null,
		public ?array $magecartScore = null,
		public ?array $malwareScore = null,
		public mixed $obfuscationScore = null,
	) {
	}
}
