<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Snapshot Disk
 */
readonly class MconnConnectorTelemetrySnapshotsGetDisksItem
{
	public function __construct(
		/** I/Os currently in progress */
		public ?float $inProgress = null,
		/** Device major number */
		public ?float $major = null,
		/** Reads merged */
		public ?float $merged = null,
		/** Device minor number */
		public ?float $minor = null,
		/** Device name */
		public ?string $name = null,
		/** Reads completed successfully */
		public ?float $reads = null,
		/** Sectors read successfully */
		public ?float $sectorsRead = null,
		/** Sectors written successfully */
		public ?float $sectorsWritten = null,
		/** Time spent doing I/Os (milliseconds) */
		public ?float $timeInProgressMs = null,
		/** Time spent reading (milliseconds) */
		public ?float $timeReadingMs = null,
		/** Time spent writing (milliseconds) */
		public ?float $timeWritingMs = null,
		/** Weighted time spent doing I/Os (milliseconds) */
		public ?float $weightedTimeInProgressMs = null,
		/** Writes completed */
		public ?float $writes = null,
		/** Writes merged */
		public ?float $writesMerged = null,
		/** Discards completed successfully */
		public ?float $discards = null,
		/** Discards merged */
		public ?float $discardsMerged = null,
		/** Flushes completed successfully */
		public ?float $flushes = null,
		/** Sectors discarded */
		public ?float $sectorsDiscarded = null,
		/** Time spent discarding (milliseconds) */
		public ?float $timeDiscardingMs = null,
		/** Time spent flushing (milliseconds) */
		public ?float $timeFlushingMs = null,
	) {
	}
}
