<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptUpdateCreateAssetsUploadSession
{
	public function __construct(
		/** The requests to make to upload assets. */
		public ?array $buckets = null,
		/** A JWT to use as authentication for uploading assets. */
		public ?string $jwt = null,
	) {
	}
}
