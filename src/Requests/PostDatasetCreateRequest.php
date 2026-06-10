<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Creates a dataset
 */
readonly class PostDatasetCreateRequest
{
	public function __construct(
		/** If true, then anyone can search the dataset. If false, then its limited to the account. */
		public bool $isPublic,
		/** Used to describe the dataset within the account context. */
		public string $name,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'isPublic' => $this->isPublic,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
