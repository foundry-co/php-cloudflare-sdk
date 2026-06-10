<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update target
 */
readonly class InfraTargetsPutRequest
{
	public function __construct(
		/**
		 * A non-unique field that refers to a target. Case insensitive, maximum
		 * length of 255 characters, supports the use of special characters dash
		 * and period, does not support spaces, and must start and end with an
		 * alphanumeric character.
		 */
		public string $hostname,
		/** The IPv4/IPv6 address that identifies where to reach a target */
		public \FoundryCo\Cloudflare\Responses\InfraTargetsPutRequestIp $ip,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'hostname' => $this->hostname,
		    'ip' => $this->ip->toArray(),
		], fn ($v) => $v !== null);
	}
}
