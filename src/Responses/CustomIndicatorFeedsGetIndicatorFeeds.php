<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomIndicatorFeedsGetIndicatorFeeds
{
	public function __construct(
		/** The date and time when the data entry was created */
		public ?\DateTimeImmutable $createdOn = null,
		/** The description of the example test */
		public ?string $description = null,
		/** The unique identifier for the indicator feed */
		public ?int $id = null,
		/** Whether the indicator feed can be attributed to a provider */
		public ?bool $isAttributable = null,
		/** Whether the indicator feed can be downloaded */
		public ?bool $isDownloadable = null,
		/** Whether the indicator feed is exposed to customers */
		public ?bool $isPublic = null,
		/** The date and time when the data entry was last modified */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The name of the indicator feed */
		public ?string $name = null,
	) {
	}
}
