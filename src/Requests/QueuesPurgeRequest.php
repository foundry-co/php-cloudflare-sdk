<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Purge Queue
 */
readonly class QueuesPurgeRequest
{
	public function __construct(
		/** Confimation that all messages will be deleted permanently. */
		public ?bool $deleteMessagesPermanently = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'delete_messages_permanently' => $this->deleteMessagesPermanently,
		], fn ($v) => $v !== null);
	}
}
