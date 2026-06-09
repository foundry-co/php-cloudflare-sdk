<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MCPPortalServersServersErrorDetails
{
	public function __construct(
		/** Underlying error message */
		public ?string $cause = null,
		/** True = MCP server returned an error. False = couldn't reach the server */
		public ?bool $isUpstream = null,
		/** MCP protocol error code */
		public ?float $mcpCode = null,
		/** Whether the error is transient and worth retrying */
		public ?bool $retryable = null,
		/** HTTP status code from the server */
		public ?float $statusCode = null,
	) {
	}
}
