<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create trigger
 */
readonly class CreateTriggerRequest
{
	public function __construct(
		public array $branchExcludes,
		public array $branchIncludes,
		public string $buildCommand,
		/** Build token UUID. */
		public string $buildTokenUuid,
		public string $deployCommand,
		/** System-generated worker script tag. */
		public string $externalScriptId,
		public array $pathExcludes,
		public array $pathIncludes,
		/** Repository connection UUID. */
		public string $repoConnectionUuid,
		/** Root directory path. */
		public string $rootDirectory,
		public string $triggerName,
		public ?bool $buildCachingEnabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'branch_excludes' => $this->branchExcludes,
		    'branch_includes' => $this->branchIncludes,
		    'build_command' => $this->buildCommand,
		    'build_token_uuid' => $this->buildTokenUuid,
		    'deploy_command' => $this->deployCommand,
		    'external_script_id' => $this->externalScriptId,
		    'path_excludes' => $this->pathExcludes,
		    'path_includes' => $this->pathIncludes,
		    'repo_connection_uuid' => $this->repoConnectionUuid,
		    'root_directory' => $this->rootDirectory,
		    'trigger_name' => $this->triggerName,
		    'build_caching_enabled' => $this->buildCachingEnabled,
		], fn ($v) => $v !== null);
	}
}
