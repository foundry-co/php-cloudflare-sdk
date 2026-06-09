<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a permission for dataset
 */
readonly class PostPermissionCreateRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\PostPermissionCreateRequestRole $role,
		public string $subjectId,
		public \FoundryCo\Cloudflare\Enums\PostPermissionCreateRequestSubjectType $subjectType,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'role' => $this->role->value,
		    'subjectId' => $this->subjectId,
		    'subjectType' => $this->subjectType->value,
		], fn ($v) => $v !== null);
	}
}
