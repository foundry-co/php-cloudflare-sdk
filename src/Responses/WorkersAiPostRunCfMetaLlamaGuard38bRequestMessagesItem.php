<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersAiPostRunCfMetaLlamaGuard38bRequestMessagesItem
{
	public function __construct(
		/** The content of the message as a string. */
		public ?string $content = null,
		/** The role of the message sender must alternate between 'user' and 'assistant'. */
		public ?\FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfMetaLlamaGuard38bRequestMessagesItemRole $role = null,
	) {
	}
}
