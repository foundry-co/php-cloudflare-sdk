<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An impersonation registry entry
 */
readonly class EmailSecuritySettingsRegistry
{
	public function __construct(
		public ?string $comments = null,
		public mixed $createdAt = null,
		public ?int $directoryId = null,
		public ?int $directoryNodeId = null,
		public ?string $email = null,
		public ?string $externalDirectoryNodeId = null,
		public mixed $id = null,
		public ?bool $isEmailRegex = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public mixed $lastModified = null,
		public mixed $modifiedAt = null,
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsRegistryProvenance $provenance = null,
	) {
	}
}
