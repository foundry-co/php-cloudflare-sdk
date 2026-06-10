<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SharedquerygetAgentsItem
{
	public function __construct(
		/** Class name of the Durable Object agent. */
		public ?string $agentClass = null,
		/** Breakdown of event counts by event type. */
		public ?array $eventTypeCounts = null,
		/** Timestamp of the earliest event from this agent in the queried window (Unix epoch ms). */
		public ?float $firstEventMs = null,
		/** Whether the agent emitted any error events in the queried window. */
		public ?bool $hasErrors = null,
		/** Timestamp of the most recent event from this agent (Unix epoch ms). */
		public ?float $lastEventMs = null,
		/** Durable Object namespace the agent belongs to. */
		public ?string $namespace = null,
		/** Worker service name that hosts this agent. */
		public ?string $service = null,
		/** Total number of events emitted by this agent in the queried window. */
		public ?float $totalEvents = null,
	) {
	}
}
