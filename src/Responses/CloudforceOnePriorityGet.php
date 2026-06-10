<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudforceOnePriorityGet
{
	public function __construct(
		/** Request content. */
		public ?string $content = null,
		public ?\DateTimeImmutable $created = null,
		/** UUID. */
		public ?string $id = null,
		public ?\DateTimeImmutable $priority = null,
		/** Requested information from request. */
		public ?string $request = null,
		/** Brief description of the request. */
		public ?string $summary = null,
		/** The CISA defined Traffic Light Protocol (TLP). */
		public ?\FoundryCo\Cloudflare\Enums\CloudforceOnePriorityGetTlp $tlp = null,
		public ?\DateTimeImmutable $updated = null,
		public ?\DateTimeImmutable $completed = null,
		/** Tokens for the request messages. */
		public ?int $messageTokens = null,
		/** Readable Request ID. */
		public ?string $readableId = null,
		/** Request Status. */
		public ?\FoundryCo\Cloudflare\Enums\CloudforceOnePriorityGetStatus $status = null,
		/** Tokens for the request. */
		public ?int $tokens = null,
	) {
	}
}
