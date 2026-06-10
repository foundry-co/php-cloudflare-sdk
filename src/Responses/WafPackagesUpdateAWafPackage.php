<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WafPackagesUpdateAWafPackage
{
	public function __construct(
		/** A summary of the purpose/function of the WAF package. */
		public ?string $description = null,
		/** The mode that defines how rules within the package are evaluated during the course of a request. When a package uses anomaly detection mode (`anomaly` value), each rule is given a score when triggered. If the total score of all triggered rules exceeds the sensitivity defined in the WAF package, the action configured in the package will be performed. Traditional detection mode (`traditional` value) will decide the action to take when it is triggered by the request. If multiple rules are triggered, the action providing the highest protection will be applied (for example, a 'block' action will win over a 'challenge' action). */
		public ?\FoundryCo\Cloudflare\Enums\WafPackagesUpdateAWafPackageDetectionMode $detectionMode = null,
		/** Defines an identifier. */
		public ?string $id = null,
		/** The name of the WAF package. */
		public ?string $name = null,
		/** Defines an identifier. */
		public ?string $zoneId = null,
		/** When set to `active`, indicates that the WAF package will be applied to the zone. */
		public ?\FoundryCo\Cloudflare\Enums\WafPackagesUpdateAWafPackageStatus $status = null,
		/** The default action performed by the rules in the WAF package. */
		public ?\FoundryCo\Cloudflare\Enums\WafPackagesUpdateAWafPackageActionMode $actionMode = null,
		/** The sensitivity of the WAF package. */
		public ?\FoundryCo\Cloudflare\Enums\WafPackagesUpdateAWafPackageSensitivity $sensitivity = null,
	) {
	}
}
