<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DosFlowtrackdApiOtherListAllowlistPrefixesForAccount
{
	public function __construct(
		/** An optional comment describing the allowlist prefix. */
		public string $comment,
		/** The creation timestamp of the allowlist prefix. */
		public \DateTimeImmutable $createdOn,
		/** Whether to enable the allowlist prefix into effect. Defaults to false. */
		public bool $enabled,
		/** The unique ID of the allowlist prefix. */
		public string $id,
		/** The last modification timestamp of the allowlist prefix. */
		public \DateTimeImmutable $modifiedOn,
		/** The allowlist prefix in CIDR format. */
		public string $prefix,
	) {
	}
}
