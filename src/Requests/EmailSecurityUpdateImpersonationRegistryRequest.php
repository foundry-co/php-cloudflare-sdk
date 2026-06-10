<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an impersonation registry entry
 */
readonly class EmailSecurityUpdateImpersonationRegistryRequest
{
	public function __construct(
		public ?string $comments = null,
		public mixed $createdAt = null,
		public ?int $directoryId = null,
		public ?int $directoryNodeId = null,
		public ?string $email = null,
		public ?string $externalDirectoryNodeId = null,
		public mixed $id = null,
		public ?bool $isEmailRegex = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public mixed $lastModified = null,
		public mixed $modifiedAt = null,
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityUpdateImpersonationRegistryRequestProvenance $provenance = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comments' => $this->comments,
		    'created_at' => $this->createdAt,
		    'directory_id' => $this->directoryId,
		    'directory_node_id' => $this->directoryNodeId,
		    'email' => $this->email,
		    'external_directory_node_id' => $this->externalDirectoryNodeId,
		    'id' => $this->id,
		    'is_email_regex' => $this->isEmailRegex,
		    'last_modified' => $this->lastModified,
		    'modified_at' => $this->modifiedAt,
		    'name' => $this->name,
		    'provenance' => $this->provenance?->value,
		], fn ($v) => $v !== null);
	}
}
