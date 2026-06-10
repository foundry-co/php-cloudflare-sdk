<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostCommandsRequestCommandsItem
{
	public function __construct(
		/** Unique identifier for the physical device */
		public ?string $deviceId = null,
		/** Type of command to execute on the device */
		public ?\FoundryCo\Cloudflare\Enums\PostCommandsRequestCommandsItemType $type = null,
		/** Email tied to the device */
		public ?string $userEmail = null,
		/** Command arguments. Allowed fields depend on `type`. */
		public mixed $args = null,
		/** Unique identifier for the device registration. Required for multi-user devices to target the correct user session. */
		public ?string $registrationId = null,
	) {
	}
}
