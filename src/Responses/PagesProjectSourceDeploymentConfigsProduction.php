<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesProjectSourceDeploymentConfigsProduction
{
	public function __construct(
		/** Whether to always use the latest compatibility date for Pages Functions. */
		public bool $alwaysUseLatestCompatibilityDate,
		/** The major version of the build image to use for Pages Functions. */
		public int $buildImageMajorVersion,
		/** Compatibility date used for Pages Functions. */
		public string $compatibilityDate,
		/** Compatibility flags used for Pages Functions. */
		public array $compatibilityFlags,
		public array $envVars,
		/** Whether to fail open when the deployment config cannot be applied. */
		public bool $failOpen,
		/** The usage model for Pages Functions. */
		public \FoundryCo\Cloudflare\Enums\PagesProjectSourceDeploymentConfigsProductionUsageModel $usageModel,
		/** Constellation bindings used for Pages Functions. */
		public ?array $aiBindings = null,
		/** Analytics Engine bindings used for Pages Functions. */
		public ?array $analyticsEngineDatasets = null,
		/** Browser bindings used for Pages Functions. */
		public ?array $browsers = null,
		/** D1 databases used for Pages Functions. */
		public ?array $d1Databases = null,
		/** Durable Object namespaces used for Pages Functions. */
		public ?array $durableObjectNamespaces = null,
		/** Hyperdrive bindings used for Pages Functions. */
		public ?array $hyperdriveBindings = null,
		/** KV namespaces used for Pages Functions. */
		public ?array $kvNamespaces = null,
		/** Limits for Pages Functions. */
		public ?PagesProjectSourceDeploymentConfigsProductionLimits $limits = null,
		/** mTLS bindings used for Pages Functions. */
		public ?array $mtlsCertificates = null,
		/** Placement setting used for Pages Functions. */
		public ?PagesProjectSourceDeploymentConfigsProductionPlacement $placement = null,
		/** Queue Producer bindings used for Pages Functions. */
		public ?array $queueProducers = null,
		/** R2 buckets used for Pages Functions. */
		public ?array $r2Buckets = null,
		/** Services used for Pages Functions. */
		public ?array $services = null,
		/** Vectorize bindings used for Pages Functions. */
		public ?array $vectorizeBindings = null,
		/** Hash of the Wrangler configuration used for the deployment. */
		public ?string $wranglerConfigHash = null,
	) {
	}
}
