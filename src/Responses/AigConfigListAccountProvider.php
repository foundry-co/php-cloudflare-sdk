<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigConfigListAccountProvider
{
	public function __construct(
		public ?string $baseUrl = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		public ?string $name = null,
		public ?string $slug = null,
		public ?bool $beta = null,
		public ?string $curlExample = null,
		public ?string $description = null,
		public ?bool $enable = null,
		public ?string $headers = null,
		public ?string $jsExample = null,
		public ?string $link = null,
		public ?string $logo = null,
		public ?int $position = null,
	) {
	}
}
