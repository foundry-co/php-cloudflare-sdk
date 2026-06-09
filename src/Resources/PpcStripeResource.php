<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PpcStripeResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Gets the stripe config for a crawler
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\PpcStripeCrawlcrawlerGetStripeConfig
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pay-per-crawl/crawler/stripe', \FoundryCo\Cloudflare\Responses\PpcStripeCrawlcrawlerGetStripeConfig::class, []);
	}


	/**
	 * Creates the stripe config for a crawler
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\PpcStripeCrawlcrawlerCreateStripeConfig
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pay-per-crawl/crawler/stripe', \FoundryCo\Cloudflare\Responses\PpcStripeCrawlcrawlerCreateStripeConfig::class, null);
	}


	/**
	 * Deletes the stripe config for a crawler
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pay-per-crawl/crawler/stripe');
	}


	/**
	 * Gets the stripe config for a publisher
	 */
	public function stripe(): \FoundryCo\Cloudflare\Responses\PpcStripeCrawlpublisherGetStripeConfig
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pay-per-crawl/publisher/stripe', \FoundryCo\Cloudflare\Responses\PpcStripeCrawlpublisherGetStripeConfig::class, []);
	}


	/**
	 * Creates the stripe config for a publisher
	 */
	public function payPerCrawlpublisherCreateStripeConfig(
	): \FoundryCo\Cloudflare\Responses\PpcStripeCrawlpublisherCreateStripeConfig
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pay-per-crawl/publisher/stripe', \FoundryCo\Cloudflare\Responses\PpcStripeCrawlpublisherCreateStripeConfig::class, null);
	}


	/**
	 * Deletes the stripe config for a publisher
	 */
	public function payPerCrawlpublisherDeleteStripeConfig(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pay-per-crawl/publisher/stripe');
	}
}
