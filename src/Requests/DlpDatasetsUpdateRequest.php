<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update details about a dataset
 */
readonly class DlpDatasetsUpdateRequest
{
	public function __construct(
		/**
		 * Determines if the words should be matched in a case-sensitive manner.
		 *
		 * Only required for custom word lists.
		 */
		public ?bool $caseSensitive = null,
		/** The description of the dataset. */
		public ?string $description = null,
		/** The name of the dataset, must be unique. */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'case_sensitive' => $this->caseSensitive,
		    'description' => $this->description,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
