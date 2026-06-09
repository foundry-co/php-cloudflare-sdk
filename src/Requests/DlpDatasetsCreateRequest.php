<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new dataset
 */
readonly class DlpDatasetsCreateRequest
{
	public function __construct(
		public string $name,
		/**
		 * Only applies to custom word lists.
		 * Determines if the words should be matched in a case-sensitive manner
		 * Cannot be set to false if `secret` is true or undefined
		 */
		public ?bool $caseSensitive = null,
		/** The description of the dataset. */
		public ?string $description = null,
		/**
		 * Dataset encoding version
		 *
		 * Non-secret custom word lists with no header are always version 1.
		 * Secret EDM lists with no header are version 1.
		 * Multicolumn CSV with headers are version 2.
		 * Omitting this field provides the default value 0, which is interpreted
		 * the same as 1.
		 */
		public ?int $encodingVersion = null,
		/**
		 * Generate a secret dataset.
		 *
		 * If true, the response will include a secret to use with the EDM encoder.
		 * If false, the response has no secret and the dataset is uploaded in plaintext.
		 */
		public ?bool $secret = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'case_sensitive' => $this->caseSensitive,
		    'description' => $this->description,
		    'encoding_version' => $this->encodingVersion,
		    'secret' => $this->secret,
		], fn ($v) => $v !== null);
	}
}
