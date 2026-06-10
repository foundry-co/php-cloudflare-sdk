<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MembersCreate
{
	public function __construct(
		public ?\DateTimeImmutable $createTime = null,
		/** Organization Member ID */
		public ?string $id = null,
		public ?array $meta = null,
		public ?\FoundryCo\Cloudflare\Enums\MembersCreateStatus $status = null,
		public ?\DateTimeImmutable $updateTime = null,
		public ?MembersCreateUser $user = null,
	) {
	}
}
