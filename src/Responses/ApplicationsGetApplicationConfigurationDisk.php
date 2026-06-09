<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The disk configuration for this deployment. By default, all containers have a disk size of 2GB.
 */
readonly class ApplicationsGetApplicationConfigurationDisk
{
	public function __construct(
		public ?array $size = null,
		/** Size of the disk, in MB. */
		public ?int $sizeMb = null,
	) {
	}
}
