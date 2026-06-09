<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Cloud Integration
 */
readonly class ProvidersUpdateRequest
{
	public function __construct(
		public ?string $awsArn = null,
		public ?string $azureSubscriptionId = null,
		public ?string $azureTenantId = null,
		public ?string $description = null,
		public ?string $friendlyName = null,
		public ?string $gcpProjectId = null,
		public ?string $gcpServiceAccountEmail = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'aws_arn' => $this->awsArn,
		    'azure_subscription_id' => $this->azureSubscriptionId,
		    'azure_tenant_id' => $this->azureTenantId,
		    'description' => $this->description,
		    'friendly_name' => $this->friendlyName,
		    'gcp_project_id' => $this->gcpProjectId,
		    'gcp_service_account_email' => $this->gcpServiceAccountEmail,
		], fn ($v) => $v !== null);
	}
}
