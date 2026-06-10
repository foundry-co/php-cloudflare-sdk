<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains R2 Data Catalog information.
 */
readonly class ListCatalogsWarehousesItem
{
	public function __construct(
		/** Specifies the associated R2 bucket name. */
		public ?string $bucket = null,
		/** Use this to uniquely identify the catalog. */
		public ?string $id = null,
		/** Specifies the catalog name (generated from account and bucket name). */
		public ?string $name = null,
		/** Indicates the status of the catalog. */
		public ?\FoundryCo\Cloudflare\Enums\ListCatalogsWarehousesItemStatus $status = null,
		/** Shows the credential configuration status. */
		public mixed $credentialStatus = null,
		/** Configures maintenance for the catalog. */
		public ?ListCatalogsWarehousesItemMaintenanceConfig $maintenanceConfig = null,
	) {
	}
}
