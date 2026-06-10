<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a rule
 */
readonly class CloudforceOneUpdateRuleRequest
{
	public function __construct(
		public ?string $content = null,
		/** Human-readable description of the rule. Auto-extracted from YARA meta if present. */
		public ?string $description = null,
		/** Whether this rule is active for dice consumers. */
		public ?bool $enabled = null,
		/** Whether this rule is visible to other internal accounts. */
		public ?bool $isPublic = null,
		public ?string $name = null,
		public ?array $namespaces = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'content' => $this->content,
		    'description' => $this->description,
		    'enabled' => $this->enabled,
		    'is_public' => $this->isPublic,
		    'name' => $this->name,
		    'namespaces' => $this->namespaces,
		], fn ($v) => $v !== null);
	}
}
