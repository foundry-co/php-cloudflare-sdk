<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicPCAPCollectionResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List packet capture requests
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pcaps', null, []);
	}


	/**
	 * Create PCAP request
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pcaps', null, null);
	}


	/**
	 * List PCAPs Bucket Ownership
	 */
	public function ownership(): \FoundryCo\Cloudflare\Responses\MagicPCAPCollectionOwnership
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pcaps/ownership', \FoundryCo\Cloudflare\Responses\MagicPCAPCollectionOwnership::class, []);
	}


	/**
	 * Add buckets for full packet captures
	 */
	public function magicPcapCollectionAddBucketsForFullPacketCaptures(
		\FoundryCo\Cloudflare\Requests\MagicPcapCollectionAddBucketsForFullPacketCapturesRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pcaps/ownership', null, $request);
	}


	/**
	 * Validate buckets for full packet captures
	 */
	public function validate(
		\FoundryCo\Cloudflare\Requests\MagicPcapCollectionValidateBucketsForFullPacketCapturesRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pcaps/ownership/validate', null, $request);
	}


	/**
	 * Delete buckets for full packet captures
	 */
	public function delete(string $ownershipId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pcaps/ownership/' . $ownershipId);
	}


	/**
	 * Get PCAP request
	 */
	public function get(string $pcapId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pcaps/' . $pcapId, null, []);
	}


	/**
	 * Download Simple PCAP
	 */
	public function download(string $pcapId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pcaps/' . $pcapId . '/download', null, []);
	}


	/**
	 * Stop full PCAP
	 */
	public function update(string $pcapId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/pcaps/' . $pcapId . '/stop', null, null);
	}
}
