<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OrganizationMembersBatchCreate
{
	public function __construct(
		public \DateTimeImmutable $createTime,
		/** Organization Member ID */
		public string $id,
		public array $meta,
		public \FoundryCo\Cloudflare\Enums\OrganizationMembersBatchCreateStatus $status,
		public \DateTimeImmutable $updateTime,
		public OrganizationMembersBatchCreateUser $user,
	) {
	}
}
