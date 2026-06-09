<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DLPDocumentFingerprintsUpload
{
	public function __construct(
		public \DateTimeImmutable $createdAt,
		public string $description,
		public string $entryId,
		public string $fileName,
		public string $id,
		public int $matchPercent,
		public string $name,
		public \FoundryCo\Cloudflare\Enums\DLPDocumentFingerprintsUploadStatus $status,
		public \DateTimeImmutable $updatedAt,
		public int $version,
	) {
	}
}
