<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class StreamSubtitlescaptionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List captions or subtitles
	 */
	public function get(string $identifier): \FoundryCo\Cloudflare\Responses\StreamSubtitlesCaptionsSubtitles
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/' . $identifier . '/captions', \FoundryCo\Cloudflare\Responses\StreamSubtitlesCaptionsSubtitles::class, []);
	}


	/**
	 * List captions or subtitles for a provided language
	 */
	public function captions(
		string $language,
		string $identifier,
	): \FoundryCo\Cloudflare\Responses\StreamSubtitlesCaptionsLanguage
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/' . $identifier . '/captions/' . $language, \FoundryCo\Cloudflare\Responses\StreamSubtitlesCaptionsLanguage::class, []);
	}


	/**
	 * Upload captions or subtitles
	 */
	public function update(
		string $language,
		string $identifier,
	): \FoundryCo\Cloudflare\Responses\StreamSubtitlesCaptionsSubtitles
	{
		return $this->client->put('/accounts/' . $this->accountId . '/stream/' . $identifier . '/captions/' . $language, \FoundryCo\Cloudflare\Responses\StreamSubtitlesCaptionsSubtitles::class, null);
	}


	/**
	 * Delete captions or subtitles
	 */
	public function delete(string $language, string $identifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/' . $identifier . '/captions/' . $language);
	}


	/**
	 * Generate captions or subtitles for a provided language via AI
	 */
	public function create(
		string $language,
		string $identifier,
	): \FoundryCo\Cloudflare\Responses\StreamSubtitlesCaptionsLanguage
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/' . $identifier . '/captions/' . $language . '/generate', \FoundryCo\Cloudflare\Responses\StreamSubtitlesCaptionsLanguage::class, null);
	}


	/**
	 * Return WebVTT captions for a provided language
	 */
	public function vtt(string $language, string $identifier): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/' . $identifier . '/captions/' . $language . '/vtt', null, []);
	}
}
