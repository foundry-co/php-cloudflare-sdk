<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerVersionsGetVersionDetailMetadata
{
	public function __construct(
		/** Email of the user who created the version. */
		public ?string $authorEmail = null,
		/** Identifier of the user who created the version. */
		public ?string $authorId = null,
		/** When the version was created. */
		public ?string $createdOn = null,
		/** Whether the version can be previewed. */
		public ?bool $hasPreview = null,
		/** When the version was last modified. */
		public ?string $modifiedOn = null,
		/** The source of the version upload. */
		public ?\FoundryCo\Cloudflare\Enums\WorkerVersionsGetVersionDetailMetadataSource $source = null,
	) {
	}
}
