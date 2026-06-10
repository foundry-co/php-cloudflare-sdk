<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AuditLogsV2GetOrganizationAuditLogsActor
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\AuditLogsV2GetOrganizationAuditLogsActorContext $context = null,
		/** The email of the actor who performed the action. */
		public ?string $email = null,
		/** The ID of the actor who performed the action. If a user performed the action, this will be their User ID. */
		public ?string $id = null,
		/** The IP address of the request that performed the action. */
		public ?string $ipAddress = null,
		/** The API token ID when the actor context is an api_token or oauth. */
		public ?string $tokenId = null,
		/** The API token name when the actor context is an api_token or oauth. */
		public ?string $tokenName = null,
		/** The type of actor. */
		public ?\FoundryCo\Cloudflare\Enums\AuditLogsV2GetOrganizationAuditLogsActorType $type = null,
	) {
	}
}
