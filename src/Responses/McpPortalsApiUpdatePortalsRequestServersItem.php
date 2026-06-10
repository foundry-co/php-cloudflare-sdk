<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class McpPortalsApiUpdatePortalsRequestServersItem
{
	public function __construct(
		/** server id */
		public ?string $serverId = null,
		public ?bool $defaultDisabled = null,
		public ?bool $onBehalf = null,
		public ?array $updatedPrompts = null,
		public ?array $updatedTools = null,
	) {
	}
}
