<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApiShieldLabelsReplaceOperationsAttachedToManagedLabel
{
	public function __construct(
		public mixed $createdAt = null,
		/** The description of the label */
		public ?string $description = null,
		public mixed $lastUpdated = null,
		/** Metadata for the label */
		public ?array $metadata = null,
		/** The name of the label */
		public ?string $name = null,
		/**
		 * * `user` - label is owned by the user
		 * * `managed` - label is owned by cloudflare
		 */
		public ?\FoundryCo\Cloudflare\Enums\ApiShieldLabelsReplaceOperationsAttachedToManagedLabelSource $source = null,
		/** Provides counts of what resources are linked to this label */
		public ?array $mappedResources = null,
	) {
	}
}
