<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StartLivestreamingRequestVideoConfig
{
	public function __construct(
		/** Height of the livestreaming video in pixels */
		public ?int $height = null,
		/** Width of the livestreaming video in pixels */
		public ?int $width = null,
	) {
	}
}
