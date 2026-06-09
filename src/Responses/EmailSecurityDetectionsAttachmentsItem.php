<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityDetectionsAttachmentsItem
{
	public function __construct(
		/** Size of the attachment in bytes */
		public int $size,
		/** MIME type of the attachment */
		public ?string $contentType = null,
		/** Detection result for this attachment */
		public mixed $detection = null,
		/** Whether the attachment is encrypted */
		public ?bool $encrypted = null,
		/** Name of the attached file */
		public ?string $filename = null,
		/** MD5 hash of the attachment */
		public ?string $md5 = null,
		/** Attachment name (alternative to filename) */
		public ?string $name = null,
		/** SHA1 hash of the attachment */
		public ?string $sha1 = null,
		/** SHA256 hash of the attachment */
		public ?string $sha256 = null,
	) {
	}
}
