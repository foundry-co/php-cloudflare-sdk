<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ShareRecipientsList
{
	public function __construct(
		/** Account identifier. */
		public ?string $accountId = null,
		/** Share Recipient association status. */
		public ?\FoundryCo\Cloudflare\Enums\ShareRecipientsListAssociationStatus $associationStatus = null,
		/** When the share was created. */
		public ?\DateTimeImmutable $created = null,
		/** Share Recipient identifier tag. */
		public ?string $id = null,
		/** When the share was modified. */
		public ?\DateTimeImmutable $modified = null,
		public ?array $resources = null,
	) {
	}
}
