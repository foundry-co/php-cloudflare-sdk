<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update custom prompt topic
 */
readonly class DlpCustomPromptTopicsUpdateRequest
{
	public function __construct(
		public bool $enabled,
		public string $name,
		public string $topic,
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'name' => $this->name,
		    'topic' => $this->topic,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
