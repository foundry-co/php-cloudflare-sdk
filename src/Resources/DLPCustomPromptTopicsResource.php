<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPCustomPromptTopicsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List custom prompt topics
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/custom_prompt_topics', \FoundryCo\Cloudflare\Responses\DlpCustomPromptTopicsList::class, []);
	}


	/**
	 * Create custom prompt topic
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlpCustomPromptTopicsCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/custom_prompt_topics', \FoundryCo\Cloudflare\Responses\DlpCustomPromptTopicsCreate::class, $request);
	}


	/**
	 * Get custom prompt topic
	 */
	public function get(string $entryId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/custom_prompt_topics/' . $entryId, \FoundryCo\Cloudflare\Responses\DlpCustomPromptTopicsGet::class, []);
	}


	/**
	 * Update custom prompt topic
	 */
	public function update(
		string $entryId,
		\FoundryCo\Cloudflare\Requests\DlpCustomPromptTopicsUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/custom_prompt_topics/' . $entryId, \FoundryCo\Cloudflare\Responses\DlpCustomPromptTopicsUpdate::class, $request);
	}


	/**
	 * Delete custom prompt topic
	 */
	public function delete(string $entryId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/custom_prompt_topics/' . $entryId);
	}
}
