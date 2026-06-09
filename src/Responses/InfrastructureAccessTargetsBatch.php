<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class InfrastructureAccessTargetsBatch
{
	public function __construct(
		/** Date and time at which the target was created */
		public \DateTimeImmutable $createdAt,
		/** A non-unique field that refers to a target */
		public string $hostname,
		/** Target identifier */
		public string $id,
		/** The IPv4/IPv6 address that identifies where to reach a target */
		public InfrastructureAccessTargetsBatchIp $ip,
		/** Date and time at which the target was modified */
		public \DateTimeImmutable $modifiedAt,
	) {
	}
}
