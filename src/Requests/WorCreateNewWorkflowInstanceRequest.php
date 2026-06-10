<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new workflow instance
 */
readonly class WorCreateNewWorkflowInstanceRequest
{
	public function __construct(
		public ?string $instanceId = null,
		public ?\FoundryCo\Cloudflare\Responses\WorCreateNewWorkflowInstanceRequestInstanceRetention $instanceRetention = null,
		public ?array $params = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'instance_id' => $this->instanceId,
		    'instance_retention' => $this->instanceRetention?->toArray(),
		    'params' => $this->params,
		], fn ($v) => $v !== null);
	}
}
