<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Modify organization.
 */
readonly class OrganizationsModifyRequest
{
	public function __construct(
		public \DateTimeImmutable $createTime,
		public mixed $id,
		public \FoundryCo\Cloudflare\Responses\OrganizationsModifyRequestMeta $meta,
		public string $name,
		public ?\FoundryCo\Cloudflare\Responses\OrganizationsModifyRequestParent $parent = null,
		public ?\FoundryCo\Cloudflare\Responses\OrganizationsModifyRequestProfile $profile = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'create_time' => $this->createTime->format(\DateTimeImmutable::ATOM),
		    'id' => $this->id,
		    'meta' => $this->meta->toArray(),
		    'name' => $this->name,
		    'parent' => $this->parent?->toArray(),
		    'profile' => $this->profile?->toArray(),
		], fn ($v) => $v !== null);
	}
}
