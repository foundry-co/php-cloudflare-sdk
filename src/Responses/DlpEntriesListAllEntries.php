<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpEntriesListAllEntries
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		public ?bool $enabled = null,
		public ?string $id = null,
		public ?string $name = null,
		public ?DlpEntriesListAllEntriesPattern $pattern = null,
		public ?\DateTimeImmutable $updatedAt = null,
		public ?\FoundryCo\Cloudflare\Enums\DlpEntriesListAllEntriesType $type = null,
		public ?DlpEntriesListAllEntriesConfidence $confidence = null,
		/**
		 * Only applies to custom word lists.
		 * Determines if the words should be matched in a case-sensitive manner
		 * Cannot be set to false if secret is true
		 */
		public ?bool $caseSensitive = null,
		public ?bool $secret = null,
		public ?array $wordList = null,
		public ?string $description = null,
		public ?string $profileId = null,
		public ?DlpEntriesListAllEntriesVariant $variant = null,
		public mixed $uploadStatus = null,
	) {
	}
}
