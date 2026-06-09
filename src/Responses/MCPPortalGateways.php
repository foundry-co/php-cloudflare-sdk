<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MCPPortalGateways
{
	public function __construct(
		public string $hostname,
		/** portal id */
		public string $id,
		public string $name,
		public array $servers,
		/** Allow remote code execution in Dynamic Workers (beta) */
		public ?bool $allowCodeMode = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?string $createdBy = null,
		public ?string $description = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		public ?string $modifiedBy = null,
		/** Route outbound MCP traffic through Zero Trust Secure Web Gateway */
		public ?bool $secureWebGateway = null,
	) {
	}
}
