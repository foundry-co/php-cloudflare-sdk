<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PriorityIntelligenceRequirementsPIRList
{
	public function __construct(
		/** Priority creation time. */
		public mixed $created,
		/** UUID. */
		public string $id,
		/** List of labels. */
		public array $labels,
		/** Priority. */
		public int $priority,
		/** Requirement. */
		public string $requirement,
		/** The CISA defined Traffic Light Protocol (TLP). */
		public \FoundryCo\Cloudflare\Enums\PriorityIntelligenceRequirementsPIRListTlp $tlp,
		/** Priority last updated time. */
		public mixed $updated,
	) {
	}
}
