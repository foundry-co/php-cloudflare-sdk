<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WAFPackagesPackage
{
	public function __construct(
		/** A summary of the purpose/function of the WAF package. */
		public string $description,
		/** When a WAF package uses anomaly detection, each rule is given a score when triggered. If the total score of all triggered rules exceeds the sensitivity defined on the WAF package, the action defined on the package will be taken. */
		public string $detectionMode,
		/** Defines an identifier. */
		public string $id,
		/** The name of the WAF package. */
		public string $name,
		/** Defines an identifier. */
		public string $zoneId,
		/** When set to `active`, indicates that the WAF package will be applied to the zone. */
		public ?\FoundryCo\Cloudflare\Enums\WAFPackagesPackageStatus $status = null,
		/** The default action performed by the rules in the WAF package. */
		public ?\FoundryCo\Cloudflare\Enums\WAFPackagesPackageActionMode $actionMode = null,
		/** The sensitivity of the WAF package. */
		public ?\FoundryCo\Cloudflare\Enums\WAFPackagesPackageSensitivity $sensitivity = null,
	) {
	}
}
