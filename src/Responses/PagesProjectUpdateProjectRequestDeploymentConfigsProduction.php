<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesProjectUpdateProjectRequestDeploymentConfigsProduction
{
	public function __construct(
		/** Constellation bindings used for Pages Functions. */
		public ?array $aiBindings = null,
		/** Whether to always use the latest compatibility date for Pages Functions. */
		public ?bool $alwaysUseLatestCompatibilityDate = null,
		/** Analytics Engine bindings used for Pages Functions. */
		public ?array $analyticsEngineDatasets = null,
		/** Browser bindings used for Pages Functions. */
		public ?array $browsers = null,
		/** The major version of the build image to use for Pages Functions. */
		public ?int $buildImageMajorVersion = null,
		/** Compatibility date used for Pages Functions. */
		public ?string $compatibilityDate = null,
		/** Compatibility flags used for Pages Functions. */
		public ?array $compatibilityFlags = null,
		/** D1 databases used for Pages Functions. */
		public ?array $d1Databases = null,
		/** Durable Object namespaces used for Pages Functions. */
		public ?array $durableObjectNamespaces = null,
		/** Environment variables used for builds and Pages Functions. */
		public ?array $envVars = null,
		/** Whether to fail open when the deployment config cannot be applied. */
		public ?bool $failOpen = null,
		/** Hyperdrive bindings used for Pages Functions. */
		public ?array $hyperdriveBindings = null,
		/** KV namespaces used for Pages Functions. */
		public ?array $kvNamespaces = null,
		/** Limits for Pages Functions. */
		public ?PagesProjectUpdateProjectRequestDeploymentConfigsProductionLimits $limits = null,
		/** mTLS bindings used for Pages Functions. */
		public ?array $mtlsCertificates = null,
		/** Placement setting used for Pages Functions. */
		public ?PagesProjectUpdateProjectRequestDeploymentConfigsProductionPlacement $placement = null,
		/** Queue Producer bindings used for Pages Functions. */
		public ?array $queueProducers = null,
		/** R2 buckets used for Pages Functions. */
		public ?array $r2Buckets = null,
		/** Services used for Pages Functions. */
		public ?array $services = null,
		/** The usage model for Pages Functions. */
		public ?\FoundryCo\Cloudflare\Enums\PagesProjectUpdateProjectRequestDeploymentConfigsProductionUsageModel $usageModel = null,
		/** Vectorize bindings used for Pages Functions. */
		public ?array $vectorizeBindings = null,
		/** Hash of the Wrangler configuration used for the deployment. */
		public ?string $wranglerConfigHash = null,
	) {
	}
}
