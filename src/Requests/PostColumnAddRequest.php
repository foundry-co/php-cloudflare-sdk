<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Add column to collection
 */
readonly class PostColumnAddRequest
{
	public function __construct(
		public string $name,
		public \FoundryCo\Cloudflare\Enums\PostColumnAddRequestType $type,
		public ?array $default = null,
		public ?bool $required = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'type' => $this->type->value,
		    'default' => $this->default,
		    'required' => $this->required,
		], fn ($v) => $v !== null);
	}
}
