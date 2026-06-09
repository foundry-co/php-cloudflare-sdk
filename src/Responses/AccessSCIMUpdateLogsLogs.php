<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessSCIMUpdateLogsLogs
{
	public function __construct(
		/** The unique Cloudflare-generated Id of the SCIM resource. */
		public ?string $cfResourceId = null,
		/** The error message which is generated when the status of the SCIM request is 'FAILURE'. */
		public ?string $errorDescription = null,
		/** The unique Id of the IdP that has SCIM enabled. */
		public ?string $idpId = null,
		/** The IdP-generated Id of the SCIM resource. */
		public ?string $idpResourceId = null,
		public ?\DateTimeImmutable $loggedAt = null,
		/** The JSON-encoded string body of the SCIM request. */
		public ?string $requestBody = null,
		/** The request method of the SCIM request. */
		public ?string $requestMethod = null,
		/** The display name of the SCIM Group resource if it exists. */
		public ?string $resourceGroupName = null,
		/** The resource type of the SCIM request. */
		public ?string $resourceType = null,
		/** The email address of the SCIM User resource if it exists. */
		public ?string $resourceUserEmail = null,
		/** The status of the SCIM request. */
		public ?string $status = null,
	) {
	}
}
