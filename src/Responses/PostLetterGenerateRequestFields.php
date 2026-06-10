<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostLetterGenerateRequestFields
{
	public function __construct(
		public ?string $discoveryDate = null,
		public ?string $domain = null,
		public ?string $generationDate = null,
		public ?string $jurisdiction = null,
		public ?string $registrantEmail = null,
		public ?string $registrar = null,
		public ?string $registrarEmail = null,
		public ?string $resolutionByDate = null,
		public ?string $senderCompany = null,
		public ?string $senderEmail = null,
		public ?string $senderName = null,
		public ?string $senderTitle = null,
		public ?string $trademarkName = null,
		public ?string $trademarkNumber = null,
		public ?string $trademarkOwner = null,
	) {
	}
}
