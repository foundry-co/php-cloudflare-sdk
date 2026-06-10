<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Assets Upload Session
 */
readonly class WorkerScriptUpdateCreateAssetsUploadSessionRequest
{
	public function __construct(
		/** A manifest ([path]: {hash, size}) map of files to upload. As an example, `/blog/hello-world.html` would be a valid path key. */
		public array $manifest,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'manifest' => $this->manifest,
		], fn ($v) => $v !== null);
	}
}
