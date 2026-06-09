<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create impersonation registry entry
 */
readonly class EmailSecurityCreateImpersonationRegistryRequest
{
	public function __construct(
		public string $email,
		public bool $isEmailRegex,
		public string $name,
		public ?string $comments = null,
		public mixed $createdAt = null,
		public ?int $directoryId = null,
		public ?int $directoryNodeId = null,
		public ?string $externalDirectoryNodeId = null,
		public mixed $id = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public mixed $lastModified = null,
		public mixed $modifiedAt = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityCreateImpersonationRegistryRequestProvenance $provenance = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'email' => $this->email,
		    'is_email_regex' => $this->isEmailRegex,
		    'name' => $this->name,
		    'comments' => $this->comments,
		    'created_at' => $this->createdAt,
		    'directory_id' => $this->directoryId,
		    'directory_node_id' => $this->directoryNodeId,
		    'external_directory_node_id' => $this->externalDirectoryNodeId,
		    'id' => $this->id,
		    'last_modified' => $this->lastModified,
		    'modified_at' => $this->modifiedAt,
		    'provenance' => $this->provenance?->value,
		], fn ($v) => $v !== null);
	}
}
