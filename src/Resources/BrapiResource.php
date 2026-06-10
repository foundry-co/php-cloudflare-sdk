<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class BrapiResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get HTML content.
	 */
	public function create(?float $cacheTTL = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/browser-rendering/content', null, null);
	}


	/**
	 * Crawl websites.
	 */
	public function crawl(?float $cacheTTL = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/browser-rendering/crawl', null, null);
	}


	/**
	 * Get crawl result.
	 */
	public function get(
		string $jobId,
		?float $cacheTTL = null,
		?\FoundryCo\Cloudflare\Enums\BrapiStatus $status = null,
		?float $cursor = null,
		?float $limit = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/crawl/' . $jobId, \FoundryCo\Cloudflare\Responses\BrapiGetCrawlResult::class, ['cacheTTL' => $cacheTTL ?? null, 'status' => $status ?? null, 'cursor' => $cursor ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Cancel a crawl job.
	 */
	public function delete(string $jobId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/browser-rendering/crawl/' . $jobId);
	}


	/**
	 * Acquire and connect to browser session.
	 */
	public function list(?float $keepAlive = null, ?bool $lab = null, ?bool $recording = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser', null, ['keepAlive' => $keepAlive ?? null, 'lab' => $lab ?? null, 'recording' => $recording ?? null]);
	}


	/**
	 * Get a browser session ID.
	 */
	public function browser(
		?float $keepAlive = null,
		?bool $lab = null,
		?bool $targets = null,
		?bool $recording = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser', null, null);
	}


	/**
	 * Connect to browser session.
	 */
	public function brapiGetDevtoolsBrowser(
		string $sessionId,
		?float $keepAlive = null,
		?bool $lab = null,
		?bool $recording = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId, null, ['keepAlive' => $keepAlive ?? null, 'lab' => $lab ?? null, 'recording' => $recording ?? null]);
	}


	/**
	 * Close browser session.
	 */
	public function brapiDeleteDevtoolsBrowserDelete(string $sessionId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId);
	}


	/**
	 * List targets.
	 */
	public function json(string $sessionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId . '/json', null, []);
	}


	/**
	 * Activate a browser target.
	 */
	public function activate(string $sessionId, string $targetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId . '/json/activate/' . $targetId, null, []);
	}


	/**
	 * Close a browser target.
	 */
	public function close(string $sessionId, string $targetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId . '/json/close/' . $targetId, null, []);
	}


	/**
	 * List targets.
	 */
	public function brapiGetDevtoolsJsonList(string $sessionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId . '/json/list', null, []);
	}


	/**
	 * Get a target by ID.
	 */
	public function brapiGetDevtoolsJsonTarget(string $sessionId, string $targetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId . '/json/list/' . $targetId, null, []);
	}


	/**
	 * Open a new browser tab.
	 */
	public function update(string $sessionId, ?string $url = null): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId . '/json/new', null, null);
	}


	/**
	 * Get Chrome DevTools Protocol schema.
	 */
	public function protocol(string $sessionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId . '/json/protocol', null, []);
	}


	/**
	 * Get browser version metadata.
	 */
	public function version(string $sessionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId . '/json/version', null, []);
	}


	/**
	 * Connect to a specific Chrome DevTools page.
	 */
	public function page(string $sessionId, string $targetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/browser/' . $sessionId . '/page/' . $targetId, null, []);
	}


	/**
	 * List sessions.
	 */
	public function session(?float $limit = null, ?float $offset = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/session', null, ['limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Get session details.
	 */
	public function brapiGetDevtoolsSessionDetails(string $sessionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/browser-rendering/devtools/session/' . $sessionId, null, []);
	}


	/**
	 * Get json.
	 */
	public function brapiPostJson(?float $cacheTTL = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/browser-rendering/json', null, null);
	}


	/**
	 * Get Links.
	 */
	public function links(?float $cacheTTL = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/browser-rendering/links', null, null);
	}


	/**
	 * Get markdown.
	 */
	public function markdown(?float $cacheTTL = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/browser-rendering/markdown', null, null);
	}


	/**
	 * Get PDF.
	 */
	public function pdf(?float $cacheTTL = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/browser-rendering/pdf', null, null);
	}


	/**
	 * Scrape elements.
	 */
	public function scrape(?float $cacheTTL = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/browser-rendering/scrape', \FoundryCo\Cloudflare\Responses\BrapiPostScrape::class, null);
	}


	/**
	 * Get screenshot.
	 */
	public function screenshot(?float $cacheTTL = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/browser-rendering/screenshot', null, null);
	}


	/**
	 * Get HTML content and screenshot.
	 */
	public function snapshot(?float $cacheTTL = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/browser-rendering/snapshot', \FoundryCo\Cloudflare\Responses\BrapiPostSnapshot::class, null);
	}
}
