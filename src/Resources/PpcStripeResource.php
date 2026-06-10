<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pay-per-crawl/crawler/stripe', \FoundryCo\Cloudflare\Responses\PayPerCrawlcrawlerGetStripeConfig::class, []);
	}


	/**
	 * Creates the stripe config for a crawler
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pay-per-crawl/crawler/stripe', \FoundryCo\Cloudflare\Responses\PayPerCrawlcrawlerCreateStripeConfig::class, null);
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
	public function stripe(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/pay-per-crawl/publisher/stripe', \FoundryCo\Cloudflare\Responses\PayPerCrawlpublisherGetStripeConfig::class, []);
	}


	/**
	 * Creates the stripe config for a publisher
	 */
	public function payPerCrawlpublisherCreateStripeConfig(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/pay-per-crawl/publisher/stripe', \FoundryCo\Cloudflare\Responses\PayPerCrawlpublisherCreateStripeConfig::class, null);
	}


	/**
	 * Deletes the stripe config for a publisher
	 */
	public function payPerCrawlpublisherDeleteStripeConfig(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/pay-per-crawl/publisher/stripe');
	}
}
