<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SharedSharedquerygetAgentsItem
{
	public function __construct(
		/** Class name of the Durable Object agent. */
		public string $agentClass,
		/** Breakdown of event counts by event type. */
		public array $eventTypeCounts,
		/** Timestamp of the earliest event from this agent in the queried window (Unix epoch ms). */
		public float $firstEventMs,
		/** Whether the agent emitted any error events in the queried window. */
		public bool $hasErrors,
		/** Timestamp of the most recent event from this agent (Unix epoch ms). */
		public float $lastEventMs,
		/** Durable Object namespace the agent belongs to. */
		public string $namespace,
		/** Worker service name that hosts this agent. */
		public string $service,
		/** Total number of events emitted by this agent in the queried window. */
		public float $totalEvents,
	) {
	}
}
