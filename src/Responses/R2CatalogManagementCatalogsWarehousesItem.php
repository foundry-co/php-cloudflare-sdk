<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains R2 Data Catalog information.
 */
readonly class R2CatalogManagementCatalogsWarehousesItem
{
	public function __construct(
		/** Specifies the associated R2 bucket name. */
		public string $bucket,
		/** Use this to uniquely identify the catalog. */
		public string $id,
		/** Specifies the catalog name (generated from account and bucket name). */
		public string $name,
		/** Indicates the status of the catalog. */
		public \FoundryCo\Cloudflare\Enums\R2CatalogManagementCatalogsWarehousesItemStatus $status,
		/** Shows the credential configuration status. */
		public mixed $credentialStatus = null,
		/** Configures maintenance for the catalog. */
		public mixed $maintenanceConfig = null,
	) {
	}
}
