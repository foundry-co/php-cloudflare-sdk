<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptListWorkers
{
	public function __construct(
		/** Date indicating targeted support in the Workers runtime. Backwards incompatible fixes to the runtime following this date will not affect this Worker. */
		public ?string $compatibilityDate = null,
		/** Flags that enable or disable certain features in the Workers runtime. Used to enable upcoming features or opt in or out of specific changes not included in a `compatibility_date`. */
		public ?array $compatibilityFlags = null,
		/** When the script was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Hashed script content, can be used in a If-None-Match header when updating. */
		public ?string $etag = null,
		/** The names of handlers exported as part of the default export. */
		public ?array $handlers = null,
		/** Whether a Worker contains assets. */
		public ?bool $hasAssets = null,
		/** Whether a Worker contains modules. */
		public ?bool $hasModules = null,
		/** The name used to identify the script. */
		public ?string $id = null,
		/** The client most recently used to deploy this Worker. */
		public ?string $lastDeployedFrom = null,
		/** Whether Logpush is turned on for the Worker. */
		public ?bool $logpush = null,
		/** The tag of the Durable Object migration that was most recently applied for this Worker. */
		public ?string $migrationTag = null,
		/** When the script was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Named exports, such as Durable Object class implementations and named entrypoints. */
		public ?array $namedHandlers = null,
		/** Observability settings for the Worker. */
		public ?WorkerScriptListWorkersObservability $observability = null,
		/** Configuration for [Smart Placement](https://developers.cloudflare.com/workers/configuration/smart-placement). Specify mode='smart' for Smart Placement, or one of region/hostname/host. */
		public ?WorkerScriptListWorkersPlacement $placement = null,
		public mixed $placementMode = null,
		public mixed $placementStatus = null,
		/** The immutable ID of the script. */
		public ?string $tag = null,
		/** Tags associated with the Worker. */
		public ?array $tags = null,
		/** List of Workers that will consume logs from the attached Worker. */
		public ?array $tailConsumers = null,
		/** Usage model for the Worker invocations. */
		public ?\FoundryCo\Cloudflare\Enums\WorkerScriptListWorkersUsageModel $usageModel = null,
		/** Routes associated with the Worker. */
		public ?array $routes = null,
	) {
	}
}
