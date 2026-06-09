<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update trigger
 */
readonly class UpdateTriggerRequest
{
	public function __construct(
		public ?array $branchExcludes = null,
		public ?array $branchIncludes = null,
		public ?bool $buildCachingEnabled = null,
		public ?string $buildCommand = null,
		/** Build token UUID. */
		public ?string $buildTokenUuid = null,
		public ?string $deployCommand = null,
		public ?array $pathExcludes = null,
		public ?array $pathIncludes = null,
		/** Root directory path. */
		public ?string $rootDirectory = null,
		public ?string $triggerName = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'branch_excludes' => $this->branchExcludes,
		    'branch_includes' => $this->branchIncludes,
		    'build_caching_enabled' => $this->buildCachingEnabled,
		    'build_command' => $this->buildCommand,
		    'build_token_uuid' => $this->buildTokenUuid,
		    'deploy_command' => $this->deployCommand,
		    'path_excludes' => $this->pathExcludes,
		    'path_includes' => $this->pathIncludes,
		    'root_directory' => $this->rootDirectory,
		    'trigger_name' => $this->triggerName,
		], fn ($v) => $v !== null);
	}
}
