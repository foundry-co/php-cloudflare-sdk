<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomPagesForAnAccountUpdateACustomPage
{
	public function __construct(
		public ?\DateTimeImmutable $createdOn = null,
		public ?string $description = null,
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedOn = null,
		public ?string $previewTarget = null,
		public ?array $requiredTokens = null,
		/** The custom page state. */
		public ?\FoundryCo\Cloudflare\Enums\CustomPagesForAnAccountUpdateACustomPageState $state = null,
		/** The URL associated with the custom page. */
		public ?string $url = null,
	) {
	}
}
