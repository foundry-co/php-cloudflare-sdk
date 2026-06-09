<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPAddressManagementPrefixesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Upload LOA Document
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\IPAddressManagementPrefixesDocument
	{
		return $this->client->post('/accounts/' . $this->accountId . '/addressing/loa_documents', \FoundryCo\Cloudflare\Responses\IPAddressManagementPrefixesDocument::class, null);
	}


	/**
	 * Download LOA Document
	 */
	public function get(string $loaDocumentId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/loa_documents/' . $loaDocumentId . '/download', null, []);
	}


	/**
	 * List Prefixes
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\IPAddressManagementPrefixesPrefixes
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/prefixes', \FoundryCo\Cloudflare\Responses\IPAddressManagementPrefixesPrefixes::class, []);
	}


	/**
	 * Add Prefix
	 */
	public function prefixes(
		\FoundryCo\Cloudflare\Requests\IpAddressManagementPrefixesAddPrefixRequest $request,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementPrefixesPrefix
	{
		return $this->client->post('/accounts/' . $this->accountId . '/addressing/prefixes', \FoundryCo\Cloudflare\Responses\IPAddressManagementPrefixesPrefix::class, $request);
	}


	/**
	 * Prefix Details
	 */
	public function ipAddressManagementPrefixesPrefixDetails(
		string $prefixId,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementPrefixesDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId, \FoundryCo\Cloudflare\Responses\IPAddressManagementPrefixesDetails::class, []);
	}


	/**
	 * Update Prefix Description
	 */
	public function update(
		string $prefixId,
		\FoundryCo\Cloudflare\Requests\IpAddressManagementPrefixesUpdatePrefixDescriptionRequest $request,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementPrefixesDescription
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId, \FoundryCo\Cloudflare\Responses\IPAddressManagementPrefixesDescription::class, $request);
	}


	/**
	 * Delete Prefix
	 */
	public function delete(string $prefixId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId);
	}


	/**
	 * Validate Prefix
	 */
	public function validate(string $prefixId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/validate', null, null);
	}
}
