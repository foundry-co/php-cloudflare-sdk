<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SCIMDiscoveryResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List SCIM Resource Types
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/scim/v2/ResourceTypes', null, []);
	}


	/**
	 * Get SCIM Resource Type
	 */
	public function get(\FoundryCo\Cloudflare\Enums\SCIMDiscoveryResourceTypeId $resourceTypeId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/scim/v2/ResourceTypes/' . $resourceTypeId, null, []);
	}


	/**
	 * List SCIM Schemas
	 */
	public function schemas(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/scim/v2/Schemas', null, []);
	}


	/**
	 * Get SCIM Schema
	 */
	public function scimSchemasGet(string $schemaId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/scim/v2/Schemas/' . $schemaId, null, []);
	}


	/**
	 * Get SCIM Service Provider Config
	 */
	public function serviceproviderconfig(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/scim/v2/ServiceProviderConfig', null, []);
	}
}
