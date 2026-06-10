<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ShareRecipientsListResourcesItem
{
	public function __construct(
		/** Share Recipient error message. */
		public ?string $error = null,
		/** Share Resource identifier. */
		public ?string $resourceId = null,
		/** Resource Version. */
		public ?int $resourceVersion = null,
		/** Whether the error is terminal or will be continually retried. */
		public ?bool $terminal = null,
	) {
	}
}
