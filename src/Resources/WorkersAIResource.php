<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WorkersAIResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Author Search
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/authors/search', null, []);
	}


	/**
	 * Get Model Schema
	 */
	public function schema(?string $model = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/models/schema', \FoundryCo\Cloudflare\Responses\WorkersAiGetModelSchema::class, ['model' => $model ?? null]);
	}


	/**
	 * Model Search
	 */
	public function search(
		?int $perPage = null,
		?int $page = null,
		?string $task = null,
		?string $author = null,
		?float $source = null,
		?bool $hideExperimental = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\WorkersAIFormat $format = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/models/search', null, ['perPage' => $perPage ?? null, 'page' => $page ?? null, 'task' => $task ?? null, 'author' => $author ?? null, 'source' => $source ?? null, 'hideExperimental' => $hideExperimental ?? null, 'search' => $search ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Execute AI Model (Generic)
	 */
	public function create(\FoundryCo\Cloudflare\Requests\WorkersAiPostRunGenericRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run', null, $request);
	}


	/**
	 * Execute AI model
	 */
	public function run(string $modelName): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/run/' . $modelName, null, null);
	}


	/**
	 * Task Search
	 */
	public function workersAiSearchTask(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/tasks/search', null, []);
	}


	/**
	 * Convert Files into Markdown
	 */
	public function tomarkdown(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai/tomarkdown', \FoundryCo\Cloudflare\Responses\WorkersAiPostToMarkdown::class, null);
	}


	/**
	 * Get all converted formats supported
	 */
	public function supported(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai/tomarkdown/supported', \FoundryCo\Cloudflare\Responses\WorkersAiGetToMarkdownSupported::class, []);
	}
}
