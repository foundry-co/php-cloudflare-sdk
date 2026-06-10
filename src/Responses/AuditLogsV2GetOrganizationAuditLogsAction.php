<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Provides information about the action performed.
 */
readonly class AuditLogsV2GetOrganizationAuditLogsAction
{
	public function __construct(
		/** A short description of the action performed. */
		public ?string $description = null,
		/** The result of the action, indicating success or failure. */
		public ?string $result = null,
		/** A timestamp indicating when the action was logged. */
		public ?\DateTimeImmutable $time = null,
		/** A short string that describes the action that was performed. */
		public ?string $type = null,
	) {
	}
}
