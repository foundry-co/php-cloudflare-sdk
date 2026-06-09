<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Rename a Namespace
 */
readonly class WorkersKvNamespaceRenameANamespaceRequest
{
	public function __construct(
		/** A human-readable string name for a Namespace. */
		public string $title,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'title' => $this->title,
		], fn ($v) => $v !== null);
	}
}
