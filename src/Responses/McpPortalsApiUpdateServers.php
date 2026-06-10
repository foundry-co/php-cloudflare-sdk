<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class McpPortalsApiUpdateServers
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\McpPortalsApiUpdateServersAuthType $authType = null,
		public ?string $hostname = null,
		/** server id */
		public ?string $id = null,
		public ?string $name = null,
		public ?array $prompts = null,
		public ?array $tools = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?string $createdBy = null,
		public ?string $description = null,
		public ?string $error = null,
		public ?McpPortalsApiUpdateServersErrorDetails $errorDetails = null,
		/** When true, the gateway worker uses the shared Cloudflare-owned OAuth callback endpoint as the redirect_uri for upstream on-behalf OAuth, instead of the customer portal hostname. New public server creates default to true; existing servers default to false from migration until explicitly updated. Effective behavior is gated by the gateway worker's per-env rollout mode KV key. */
		public ?bool $isSharedOauthCallbackEnabled = null,
		public ?\DateTimeImmutable $lastSuccessfulSync = null,
		public ?\DateTimeImmutable $lastSynced = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		public ?string $modifiedBy = null,
		/** Route outbound traffic to this MCP server through Zero Trust Secure Web Gateway */
		public ?bool $secureWebGateway = null,
		public ?string $status = null,
		public ?array $updatedPrompts = null,
		public ?array $updatedTools = null,
	) {
	}
}
