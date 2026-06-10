<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class InfraTargetsGet
{
	public function __construct(
		/** Date and time at which the target was created */
		public ?\DateTimeImmutable $createdAt = null,
		/** A non-unique field that refers to a target */
		public ?string $hostname = null,
		/** Target identifier */
		public ?string $id = null,
		/** The IPv4/IPv6 address that identifies where to reach a target */
		public ?InfraTargetsGetIp $ip = null,
		/** Date and time at which the target was modified */
		public ?\DateTimeImmutable $modifiedAt = null,
	) {
	}
}
