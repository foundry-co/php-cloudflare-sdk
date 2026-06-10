<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CloudforceOnePriorityNew
{
	public function __construct(
		/** Priority creation time. */
		public mixed $created = null,
		/** UUID. */
		public ?string $id = null,
		/** List of labels. */
		public ?array $labels = null,
		/** Priority. */
		public ?int $priority = null,
		/** Requirement. */
		public ?string $requirement = null,
		/** The CISA defined Traffic Light Protocol (TLP). */
		public ?\FoundryCo\Cloudflare\Enums\CloudforceOnePriorityNewTlp $tlp = null,
		/** Priority last updated time. */
		public mixed $updated = null,
	) {
	}
}
