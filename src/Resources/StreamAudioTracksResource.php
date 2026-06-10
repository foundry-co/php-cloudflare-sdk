<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function get(string $identifier): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/' . $identifier . '/audio', \FoundryCo\Cloudflare\Responses\ListAudioTracks::class, []);
	}


	/**
	 * Add audio tracks to a video
	 */
	public function create(string $identifier, \FoundryCo\Cloudflare\Requests\AddAudioTrackRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/' . $identifier . '/audio/copy', \FoundryCo\Cloudflare\Responses\AddAudioTrack::class, $request);
	}


	/**
	 * Edit additional audio tracks on a video
	 */
	public function update(
		string $identifier,
		string $audioIdentifier,
		\FoundryCo\Cloudflare\Requests\EditAudioTracksRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/stream/' . $identifier . '/audio/' . $audioIdentifier, \FoundryCo\Cloudflare\Responses\EditAudioTracks::class, $request);
	}


	/**
	 * Delete additional audio tracks on a video
	 */
	public function delete(string $identifier, string $audioIdentifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/' . $identifier . '/audio/' . $audioIdentifier);
	}
}
