<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a rule
 */
readonly class CloudforceOneCreateRuleRequest
{
	public function __construct(
		public string $content,
		public string $name,
		public array $namespaces,
		public ?array $actions = null,
		/** Human-readable description of the rule. Auto-extracted from YARA meta if present. */
		public ?string $description = null,
		/** Whether this rule is active for dice consumers. */
		public ?bool $enabled = null,
		/** Whether this rule is visible to other internal accounts. */
		public ?bool $isPublic = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'content' => $this->content,
		    'name' => $this->name,
		    'namespaces' => $this->namespaces,
		    'actions' => $this->actions,
		    'description' => $this->description,
		    'enabled' => $this->enabled,
		    'is_public' => $this->isPublic,
		], fn ($v) => $v !== null);
	}
}
