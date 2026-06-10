<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new MCP Portal
 */
readonly class McpPortalsApiCreatePortalsRequest
{
	public function __construct(
		public string $hostname,
		/** portal id */
		public string $id,
		public string $name,
		/** Allow remote code execution in Dynamic Workers (beta) */
		public ?bool $allowCodeMode = null,
		public ?string $description = null,
		/** Route outbound MCP traffic through Zero Trust Secure Web Gateway */
		public ?bool $secureWebGateway = null,
		public ?array $servers = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'hostname' => $this->hostname,
		    'id' => $this->id,
		    'name' => $this->name,
		    'allow_code_mode' => $this->allowCodeMode,
		    'description' => $this->description,
		    'secure_web_gateway' => $this->secureWebGateway,
		    'servers' => $this->servers,
		], fn ($v) => $v !== null);
	}
}
