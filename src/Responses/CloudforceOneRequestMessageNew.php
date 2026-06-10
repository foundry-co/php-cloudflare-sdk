<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudforceOneRequestMessageNew
{
	public function __construct(
		/** Author of message. */
		public ?string $author = null,
		/** Content of message. */
		public ?string $content = null,
		/** Message ID. */
		public ?int $id = null,
		/** Whether the message is a follow-on request. */
		public ?bool $isFollowOnRequest = null,
		/** Defines the message last updated time. */
		public mixed $updated = null,
		/** Defines the message creation time. */
		public mixed $created = null,
	) {
	}
}
