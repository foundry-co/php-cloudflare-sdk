<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Change Job Status
 */
readonly class AiSearchNamespaceInstanceChangeJobStatusRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\AiSearchNamespaceInstanceChangeJobStatusRequestAction $action,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action' => $this->action->value,
		], fn ($v) => $v !== null);
	}
}
