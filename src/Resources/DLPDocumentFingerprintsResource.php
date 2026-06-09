<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\DLPDocumentFingerprintsAll
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/document_fingerprints', \FoundryCo\Cloudflare\Responses\DLPDocumentFingerprintsAll::class, []);
	}


	/**
	 * Creates a new document fingerprint.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlpDocumentFingerprintsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPDocumentFingerprintsCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/document_fingerprints', \FoundryCo\Cloudflare\Responses\DLPDocumentFingerprintsCreate::class, $request);
	}


	/**
	 * Retrieve data about a specific document fingerprint.
	 */
	public function get(string $documentFingerprintId): \FoundryCo\Cloudflare\Responses\DLPDocumentFingerprintsRead
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/document_fingerprints/' . $documentFingerprintId, \FoundryCo\Cloudflare\Responses\DLPDocumentFingerprintsRead::class, []);
	}


	/**
	 * Update the attributes of a single document fingerprint.
	 */
	public function documentFingerprints(
		string $documentFingerprintId,
		\FoundryCo\Cloudflare\Requests\DlpDocumentFingerprintsUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPDocumentFingerprintsUpdate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/document_fingerprints/' . $documentFingerprintId, \FoundryCo\Cloudflare\Responses\DLPDocumentFingerprintsUpdate::class, $request);
	}


	/**
	 * Uploads a new version for a document fingerprint.
	 */
	public function update(string $documentFingerprintId): \FoundryCo\Cloudflare\Responses\DLPDocumentFingerprintsUpload
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/document_fingerprints/' . $documentFingerprintId, \FoundryCo\Cloudflare\Responses\DLPDocumentFingerprintsUpload::class, null);
	}


	/**
	 * Delete a single document fingerprint.
	 */
	public function delete(string $documentFingerprintId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/document_fingerprints/' . $documentFingerprintId);
	}
}
