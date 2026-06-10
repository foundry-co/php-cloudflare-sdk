<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The version of the analyzed script.
 */
readonly class PageShieldGetScriptVersionsItem
{
	public function __construct(
		/** The cryptomining score of the JavaScript content. */
		public ?int $cryptominingScore = null,
		public mixed $dataflowScore = null,
		/** The timestamp of when the script was last fetched. */
		public ?string $fetchedAt = null,
		/** The computed hash of the analyzed script. */
		public ?string $hash = null,
		/** The integrity score of the JavaScript content. */
		public ?int $jsIntegrityScore = null,
		/** The magecart score of the JavaScript content. */
		public ?int $magecartScore = null,
		/** The malware score of the JavaScript content. */
		public ?int $malwareScore = null,
		public mixed $obfuscationScore = null,
	) {
	}
}
