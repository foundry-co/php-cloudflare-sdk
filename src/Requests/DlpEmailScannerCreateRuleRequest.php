<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create email scanner rule
 */
readonly class DlpEmailScannerCreateRuleRequest
{
	public function __construct(
		public mixed $action,
		/** Triggered if all conditions match. */
		public array $conditions,
		public bool $enabled,
		public string $name,
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action' => $this->action,
		    'conditions' => $this->conditions,
		    'enabled' => $this->enabled,
		    'name' => $this->name,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
