<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Validate rule with context
 */
readonly class CloudforceOneValidateRuleRequest
{
	public function __construct(
		public string $content,
		public string $name,
		public array $namespaces,
		public ?string $excludeRuleId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'content' => $this->content,
		    'name' => $this->name,
		    'namespaces' => $this->namespaces,
		    'excludeRuleId' => $this->excludeRuleId,
		], fn ($v) => $v !== null);
	}
}
