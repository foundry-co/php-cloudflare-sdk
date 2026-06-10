<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Snapshot Mount
 */
readonly class MconnConnectorTelemetrySnapshotsGetMountsItem
{
	public function __construct(
		/** File system on disk (EXT4, NTFS, etc.) */
		public ?string $fileSystem = null,
		/** Kind of disk (HDD, SSD, etc.) */
		public ?string $kind = null,
		/** Path where disk is mounted */
		public ?string $mountPoint = null,
		/** Name of the disk mount */
		public ?string $name = null,
		/** Available disk size (bytes) */
		public ?float $availableBytes = null,
		/** Available inodes on filesystem */
		public ?float $availableInodes = null,
		/** Determines whether the disk is read-only */
		public ?bool $isReadOnly = null,
		/** Determines whether the disk is removable */
		public ?bool $isRemovable = null,
		/** Total disk size (bytes) */
		public ?float $totalBytes = null,
		/** Total inodes on filesystem */
		public ?float $totalInodes = null,
	) {
	}
}
