<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Priority Intelligence Requirement
 */
readonly class CloudforceOnePriorityUpdateRequest
{
	public function __construct(
		/** List of labels. */
		public array $labels,
		/** Priority. */
		public int $priority,
		/** Requirement. */
		public string $requirement,
		/** The CISA defined Traffic Light Protocol (TLP). */
		public \FoundryCo\Cloudflare\Enums\CloudforceOnePriorityUpdateRequestTlp $tlp,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'labels' => $this->labels,
		    'priority' => $this->priority,
		    'requirement' => $this->requirement,
		    'tlp' => $this->tlp->value,
		], fn ($v) => $v !== null);
	}
}
