<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudforceOneRequestAssetGet
{
	public function __construct(
		/** Asset ID. */
		public ?int $id = null,
		/** Asset name. */
		public ?string $name = null,
		/** Defines the asset creation time. */
		public mixed $created = null,
		/** Asset description. */
		public ?string $description = null,
		/** Asset file type. */
		public ?string $fileType = null,
	) {
	}
}
