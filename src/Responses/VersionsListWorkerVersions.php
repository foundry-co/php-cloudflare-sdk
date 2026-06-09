<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VersionsListWorkerVersions
{
	public function __construct(
		/** When the version was created. */
		public \DateTimeImmutable $createdOn,
		/** Version identifier. */
		public string $id,
		/** The integer version number, starting from one. */
		public int $number,
		/** All routable URLs that always point to this version. Does not include alias URLs, since aliases can be updated to point to a different version. */
		public array $urls,
		/** Metadata about the version. */
		public ?VersionsListWorkerVersionsAnnotations $annotations = null,
		/**
		 * Configuration for assets within a Worker.
		 *
		 * [`_headers`](https://developers.cloudflare.com/workers/static-assets/headers/#custom-headers) and
		 * [`_redirects`](https://developers.cloudflare.com/workers/static-assets/redirects/) files should be
		 * included as modules named `_headers` and `_redirects` with content type `text/plain`.
		 */
		public ?VersionsListWorkerVersionsAssets $assets = null,
		/** List of bindings attached to a Worker. You can find more about bindings on our docs: https://developers.cloudflare.com/workers/configuration/multipart-upload-metadata/#bindings. */
		public ?array $bindings = null,
		/** Date indicating targeted support in the Workers runtime. Backwards incompatible fixes to the runtime following this date will not affect this Worker. */
		public ?string $compatibilityDate = null,
		/** Flags that enable or disable certain features in the Workers runtime. Used to enable upcoming features or opt in or out of specific changes not included in a `compatibility_date`. */
		public ?array $compatibilityFlags = null,
		/** List of containers attached to a Worker. Containers can only be attached to Durable Object classes of this Worker script. */
		public ?array $containers = null,
		/** Resource limits enforced at runtime. */
		public ?VersionsListWorkerVersionsLimits $limits = null,
		/** The name of the main module in the `modules` array (e.g. the name of the module that exports a `fetch` handler). */
		public ?string $mainModule = null,
		/** Durable Object migration tag. Set when the version is deployed. Omitted if the version has not been deployed or the Worker does not use Durable Objects. */
		public ?string $migrationTag = null,
		/** Migrations for Durable Objects associated with the version. Migrations are applied when the version is deployed. */
		public mixed $migrations = null,
		/**
		 * Code, sourcemaps, and other content used at runtime.
		 *
		 * This includes [`_headers`](https://developers.cloudflare.com/workers/static-assets/headers/#custom-headers) and
		 * [`_redirects`](https://developers.cloudflare.com/workers/static-assets/redirects/) files used to configure
		 * [Static Assets](https://developers.cloudflare.com/workers/static-assets/). `_headers` and `_redirects` files should be
		 * included as modules named `_headers` and `_redirects` with content type `text/plain`.
		 */
		public ?array $modules = null,
		/** Configuration for [Smart Placement](https://developers.cloudflare.com/workers/configuration/smart-placement). Specify mode='smart' for Smart Placement, or one of region/hostname/host. */
		public mixed $placement = null,
		/** The client used to create the version. */
		public ?string $source = null,
		/** Time in milliseconds spent on [Worker startup](https://developers.cloudflare.com/workers/platform/limits/#worker-startup-time). */
		public ?int $startupTimeMs = null,
		/** Usage model for the version. */
		public ?\FoundryCo\Cloudflare\Enums\VersionsListWorkerVersionsUsageModel $usageModel = null,
	) {
	}
}
