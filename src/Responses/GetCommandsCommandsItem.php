<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetCommandsCommandsItem
{
	public function __construct(
		public ?\DateTimeImmutable $completedDate = null,
		public ?\DateTimeImmutable $createdDate = null,
		public ?string $deviceId = null,
		public ?string $filename = null,
		public ?string $id = null,
		/** Unique identifier for the device registration */
		public ?string $registrationId = null,
		public ?string $status = null,
		public ?string $type = null,
		public ?string $userEmail = null,
	) {
	}
}
