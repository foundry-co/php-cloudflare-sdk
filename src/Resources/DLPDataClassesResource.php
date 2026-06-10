<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPDataClassesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Retrieve all data classes in an account
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/data_classes', \FoundryCo\Cloudflare\Responses\DlpDataClassesList::class, []);
	}


	/**
	 * Creates a new data class
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlpDataClassesCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/data_classes', \FoundryCo\Cloudflare\Responses\DlpDataClassesCreate::class, $request);
	}


	/**
	 * Retrieve a specific data class
	 */
	public function get(string $dataClassId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/data_classes/' . $dataClassId, \FoundryCo\Cloudflare\Responses\DlpDataClassesRead::class, []);
	}


	/**
	 * Update the attributes of a single data class
	 */
	public function update(
		string $dataClassId,
		\FoundryCo\Cloudflare\Requests\DlpDataClassesUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/data_classes/' . $dataClassId, \FoundryCo\Cloudflare\Responses\DlpDataClassesUpdate::class, $request);
	}


	/**
	 * Delete a single data class
	 */
	public function delete(string $dataClassId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/data_classes/' . $dataClassId);
	}
}
