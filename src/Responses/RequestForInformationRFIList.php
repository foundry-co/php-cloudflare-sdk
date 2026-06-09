<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RequestForInformationRFIList
{
	public function __construct(
		/** Request creation time. */
		public mixed $created,
		/** UUID. */
		public string $id,
		public \FoundryCo\Cloudflare\Enums\RequestForInformationRFIListPriority $priority,
		/** Requested information from request. */
		public string $request,
		/** Brief description of the request. */
		public string $summary,
		/** The CISA defined Traffic Light Protocol (TLP). */
		public \FoundryCo\Cloudflare\Enums\RequestForInformationRFIListTlp $tlp,
		/** Request last updated time. */
		public mixed $updated,
		/** Request completion time. */
		public mixed $completed = null,
		/** Tokens for the request messages. */
		public ?int $messageTokens = null,
		/** Readable Request ID. */
		public ?string $readableId = null,
		/** Request Status. */
		public ?\FoundryCo\Cloudflare\Enums\RequestForInformationRFIListStatus $status = null,
		/** Tokens for the request. */
		public ?int $tokens = null,
	) {
	}
}
