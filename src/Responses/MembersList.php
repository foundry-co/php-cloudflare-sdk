<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MembersList
{
	public function __construct(
		public ?\DateTimeImmutable $createTime = null,
		/** Organization Member ID */
		public ?string $id = null,
		public ?array $meta = null,
		public ?\FoundryCo\Cloudflare\Enums\MembersListStatus $status = null,
		public ?\DateTimeImmutable $updateTime = null,
		public ?MembersListUser $user = null,
	) {
	}
}
