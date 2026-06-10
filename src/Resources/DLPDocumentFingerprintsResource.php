<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPDocumentFingerprintsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Retrieve data about all document fingerprints.
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/document_fingerprints', \FoundryCo\Cloudflare\Responses\DlpDocumentFingerprintsReadAll::class, []);
	}


	/**
	 * Creates a new document fingerprint.
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlpDocumentFingerprintsCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/document_fingerprints', \FoundryCo\Cloudflare\Responses\DlpDocumentFingerprintsCreate::class, $request);
	}


	/**
	 * Retrieve data about a specific document fingerprint.
	 */
	public function get(string $documentFingerprintId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/document_fingerprints/' . $documentFingerprintId, \FoundryCo\Cloudflare\Responses\DlpDocumentFingerprintsRead::class, []);
	}


	/**
	 * Update the attributes of a single document fingerprint.
	 */
	public function documentFingerprints(
		string $documentFingerprintId,
		\FoundryCo\Cloudflare\Requests\DlpDocumentFingerprintsUpdateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/document_fingerprints/' . $documentFingerprintId, \FoundryCo\Cloudflare\Responses\DlpDocumentFingerprintsUpdate::class, $request);
	}


	/**
	 * Uploads a new version for a document fingerprint.
	 */
	public function update(string $documentFingerprintId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/document_fingerprints/' . $documentFingerprintId, \FoundryCo\Cloudflare\Responses\DlpDocumentFingerprintsUpload::class, null);
	}


	/**
	 * Delete a single document fingerprint.
	 */
	public function delete(string $documentFingerprintId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/document_fingerprints/' . $documentFingerprintId);
	}
}
