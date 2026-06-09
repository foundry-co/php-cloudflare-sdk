<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class StreamAudioTracksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List additional audio tracks on a video
	 */
	public function get(string $identifier): \FoundryCo\Cloudflare\Responses\StreamAudioTracksTracks
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/' . $identifier . '/audio', \FoundryCo\Cloudflare\Responses\StreamAudioTracksTracks::class, []);
	}


	/**
	 * Add audio tracks to a video
	 */
	public function create(
		string $identifier,
		\FoundryCo\Cloudflare\Requests\AddAudioTrackRequest $request,
	): \FoundryCo\Cloudflare\Responses\StreamAudioTracksTrack
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/' . $identifier . '/audio/copy', \FoundryCo\Cloudflare\Responses\StreamAudioTracksTrack::class, $request);
	}


	/**
	 * Edit additional audio tracks on a video
	 */
	public function update(
		string $identifier,
		string $audioIdentifier,
		\FoundryCo\Cloudflare\Requests\EditAudioTracksRequest $request,
	): \FoundryCo\Cloudflare\Responses\StreamAudioTracksTracks
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/stream/' . $identifier . '/audio/' . $audioIdentifier, \FoundryCo\Cloudflare\Responses\StreamAudioTracksTracks::class, $request);
	}


	/**
	 * Delete additional audio tracks on a video
	 */
	public function delete(string $identifier, string $audioIdentifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/' . $identifier . '/audio/' . $audioIdentifier);
	}
}
