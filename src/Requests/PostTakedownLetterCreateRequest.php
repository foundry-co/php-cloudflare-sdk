<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create takedown letter
 */
readonly class PostTakedownLetterCreateRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\PostTakedownLetterCreateRequestFields $fields,
		public string $templateId,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'fields' => $this->fields->toArray(),
		    'templateId' => $this->templateId,
		], fn ($v) => $v !== null);
	}
}
