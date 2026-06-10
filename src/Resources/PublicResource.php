<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PublicResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List account email suppressions
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\PublicOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\PublicDirection $direction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/routing/suppression', \FoundryCo\Cloudflare\Responses\GetPublicListSuppressionRouting::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create account email suppression
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostPublicNewSuppressionRoutingRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email/routing/suppression', \FoundryCo\Cloudflare\Responses\PostPublicNewSuppressionRouting::class, $request);
	}


	/**
	 * Get account email suppression
	 */
	public function get(string $suppressionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/routing/suppression/' . $suppressionId, \FoundryCo\Cloudflare\Responses\GetPublicGetSuppressionRouting::class, []);
	}


	/**
	 * Delete account email suppression
	 */
	public function delete(string $suppressionId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/email/routing/suppression/' . $suppressionId);
	}


	/**
	 * Get feedback emails statistics
	 */
	public function feedback(?\DateTimeImmutable $startAt = null, ?\DateTimeImmutable $endAt = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/sending/feedback', \FoundryCo\Cloudflare\Responses\GetPublicFeedbackStatus::class, ['startAt' => $startAt ?? null, 'endAt' => $endAt ?? null]);
	}


	/**
	 * List account email suppressions
	 */
	public function suppression(
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\PublicOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\PublicDirection $direction = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/sending/suppression', \FoundryCo\Cloudflare\Responses\GetPublicListSuppressionSending::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create account email suppression
	 */
	public function postPublicNewSuppressionSending(
		\FoundryCo\Cloudflare\Requests\PostPublicNewSuppressionSendingRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email/sending/suppression', \FoundryCo\Cloudflare\Responses\PostPublicNewSuppressionSending::class, $request);
	}


	/**
	 * Get account email suppression
	 */
	public function getPublicGetSuppressionSending(string $suppressionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/sending/suppression/' . $suppressionId, \FoundryCo\Cloudflare\Responses\GetPublicGetSuppressionSending::class, []);
	}


	/**
	 * Delete account email suppression
	 */
	public function deletePublicDeleteSuppressionSending(string $suppressionId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/email/sending/suppression/' . $suppressionId);
	}


	/**
	 * List zone email suppressions
	 */
	public function getPublicListSuppressionZoneRouting(
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\PublicOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\PublicDirection $direction = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/routing/suppression', \FoundryCo\Cloudflare\Responses\GetPublicListSuppressionZoneRouting::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create zone email suppression
	 */
	public function postPublicNewSuppressionZoneRouting(
		\FoundryCo\Cloudflare\Requests\PostPublicNewSuppressionZoneRoutingRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/routing/suppression', \FoundryCo\Cloudflare\Responses\PostPublicNewSuppressionZoneRouting::class, $request);
	}


	/**
	 * Get zone email suppression
	 */
	public function getPublicGetSuppressionZoneRouting(string $suppressionId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/routing/suppression/' . $suppressionId, \FoundryCo\Cloudflare\Responses\GetPublicGetSuppressionZoneRouting::class, []);
	}


	/**
	 * Delete zone email suppression
	 */
	public function deletePublicDeleteSuppressionZoneRouting(string $suppressionId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/email/routing/suppression/' . $suppressionId);
	}


	/**
	 * List zone email suppressions
	 */
	public function getPublicListSuppressionZoneSending(
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\PublicOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\PublicDirection $direction = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/suppression', \FoundryCo\Cloudflare\Responses\GetPublicListSuppressionZoneSending::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create zone email suppression
	 */
	public function postPublicNewSuppressionZoneSending(
		\FoundryCo\Cloudflare\Requests\PostPublicNewSuppressionZoneSendingRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/sending/suppression', \FoundryCo\Cloudflare\Responses\PostPublicNewSuppressionZoneSending::class, $request);
	}


	/**
	 * Get zone email suppression
	 */
	public function getPublicGetSuppressionZoneSending(string $suppressionId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/suppression/' . $suppressionId, \FoundryCo\Cloudflare\Responses\GetPublicGetSuppressionZoneSending::class, []);
	}


	/**
	 * Delete zone email suppression
	 */
	public function deletePublicDeleteSuppressionZoneSending(string $suppressionId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/email/sending/suppression/' . $suppressionId);
	}
}
