<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new Finetune
 */
readonly class WorkersAiCreateFinetuneRequest
{
	public function __construct(
		public string $model,
		public string $name,
		public ?string $description = null,
		public ?bool $public = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'model' => $this->model,
		    'name' => $this->name,
		    'description' => $this->description,
		    'public' => $this->public,
		], fn ($v) => $v !== null);
	}
}
