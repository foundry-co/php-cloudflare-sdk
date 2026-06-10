<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostCommandsCommandsItem
{
	public function __construct(
		/** Command arguments */
		public ?array $args = null,
		/** Identifier for the device associated with the command */
		public ?string $deviceId = null,
		/** Unique identifier for the command */
		public ?string $id = null,
		/** Unique identifier for the device registration */
		public ?string $registrationId = null,
		/** Current status of the command */
		public ?\FoundryCo\Cloudflare\Enums\PostCommandsCommandsItemStatus $status = null,
		/** Type of the command (e.g., "pcap", "speed-test", or "warp-diag") */
		public ?string $type = null,
	) {
	}
}
