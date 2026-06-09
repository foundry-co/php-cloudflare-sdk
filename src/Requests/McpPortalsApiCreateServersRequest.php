<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new MCP Server
 */
readonly class McpPortalsApiCreateServersRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\McpPortalsApiCreateServersRequestAuthType $authType,
		public string $hostname,
		/** server id */
		public string $id,
		public string $name,
		public ?string $authCredentials = null,
		public ?string $description = null,
		/** When true, the gateway worker uses the shared Cloudflare-owned OAuth callback endpoint as the redirect_uri for upstream on-behalf OAuth, instead of the customer portal hostname. New public server creates default to true; existing servers default to false from migration until explicitly updated. Effective behavior is gated by the gateway worker's per-env rollout mode KV key. */
		public ?bool $isSharedOauthCallbackEnabled = null,
		/** Route outbound traffic to this MCP server through Zero Trust Secure Web Gateway */
		public ?bool $secureWebGateway = null,
		public ?array $updatedPrompts = null,
		public ?array $updatedTools = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'auth_type' => $this->authType->value,
		    'hostname' => $this->hostname,
		    'id' => $this->id,
		    'name' => $this->name,
		    'auth_credentials' => $this->authCredentials,
		    'description' => $this->description,
		    'is_shared_oauth_callback_enabled' => $this->isSharedOauthCallbackEnabled,
		    'secure_web_gateway' => $this->secureWebGateway,
		    'updated_prompts' => $this->updatedPrompts,
		    'updated_tools' => $this->updatedTools,
		], fn ($v) => $v !== null);
	}
}
