<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a MCP Portal
 */
readonly class McpPortalsApiUpdatePortalsRequest
{
	public function __construct(
		/** Allow remote code execution in Dynamic Workers (beta) */
		public ?bool $allowCodeMode = null,
		public ?string $description = null,
		public ?string $hostname = null,
		public ?string $name = null,
		/** Route outbound MCP traffic through Zero Trust Secure Web Gateway */
		public ?bool $secureWebGateway = null,
		public ?array $servers = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'allow_code_mode' => $this->allowCodeMode,
		    'description' => $this->description,
		    'hostname' => $this->hostname,
		    'name' => $this->name,
		    'secure_web_gateway' => $this->secureWebGateway,
		    'servers' => $this->servers,
		], fn ($v) => $v !== null);
	}
}
