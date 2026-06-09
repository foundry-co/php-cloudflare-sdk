<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ResourceSharingList
{
	public function __construct(
		/** Account identifier. */
		public string $accountId,
		/** The display name of an account. */
		public string $accountName,
		/** When the share was created. */
		public \DateTimeImmutable $created,
		/** Share identifier tag. */
		public string $id,
		/** When the share was modified. */
		public \DateTimeImmutable $modified,
		/** The name of the share. */
		public string $name,
		/** Organization identifier. */
		public string $organizationId,
		public \FoundryCo\Cloudflare\Enums\ResourceSharingListStatus $status,
		public \FoundryCo\Cloudflare\Enums\ResourceSharingListTargetType $targetType,
		/** The number of recipients in the 'associated' state. This field is only included when requested via the 'include_recipient_counts' parameter. */
		public ?int $associatedRecipientCount = null,
		/** The number of recipients in the 'associating' state. This field is only included when requested via the 'include_recipient_counts' parameter. */
		public ?int $associatingRecipientCount = null,
		/** The number of recipients in the 'disassociated' state. This field is only included when requested via the 'include_recipient_counts' parameter. */
		public ?int $disassociatedRecipientCount = null,
		/** The number of recipients in the 'disassociating' state. This field is only included when requested via the 'include_recipient_counts' parameter. */
		public ?int $disassociatingRecipientCount = null,
		public ?\FoundryCo\Cloudflare\Enums\ResourceSharingListKind $kind = null,
		/** A list of resources that are part of the share. This field is only included when requested via the 'include_resources' parameter. */
		public ?array $resources = null,
	) {
	}
}
