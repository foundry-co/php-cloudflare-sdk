<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	): \FoundryCo\Cloudflare\Responses\PublicPublicListSuppressionRouting
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/routing/suppression', \FoundryCo\Cloudflare\Responses\PublicPublicListSuppressionRouting::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create account email suppression
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PostPublicNewSuppressionRoutingRequest $request,
	): \FoundryCo\Cloudflare\Responses\PublicPublicNewSuppressionRouting
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email/routing/suppression', \FoundryCo\Cloudflare\Responses\PublicPublicNewSuppressionRouting::class, $request);
	}


	/**
	 * Get account email suppression
	 */
	public function get(string $suppressionId): \FoundryCo\Cloudflare\Responses\PublicPublicGetSuppressionRouting
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/routing/suppression/' . $suppressionId, \FoundryCo\Cloudflare\Responses\PublicPublicGetSuppressionRouting::class, []);
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
	public function feedback(
		?\DateTimeImmutable $startAt = null,
		?\DateTimeImmutable $endAt = null,
	): \FoundryCo\Cloudflare\Responses\PublicPublicFeedbackStatus
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/sending/feedback', \FoundryCo\Cloudflare\Responses\PublicPublicFeedbackStatus::class, ['startAt' => $startAt ?? null, 'endAt' => $endAt ?? null]);
	}


	/**
	 * List account email suppressions
	 */
	public function suppression(
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\PublicOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\PublicDirection $direction = null,
	): \FoundryCo\Cloudflare\Responses\PublicPublicListSuppressionSending
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/sending/suppression', \FoundryCo\Cloudflare\Responses\PublicPublicListSuppressionSending::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create account email suppression
	 */
	public function postPublicNewSuppressionSending(
		\FoundryCo\Cloudflare\Requests\PostPublicNewSuppressionSendingRequest $request,
	): \FoundryCo\Cloudflare\Responses\PublicPublicNewSuppressionSending
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email/sending/suppression', \FoundryCo\Cloudflare\Responses\PublicPublicNewSuppressionSending::class, $request);
	}


	/**
	 * Get account email suppression
	 */
	public function getPublicGetSuppressionSending(
		string $suppressionId,
	): \FoundryCo\Cloudflare\Responses\PublicPublicGetSuppressionSending
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email/sending/suppression/' . $suppressionId, \FoundryCo\Cloudflare\Responses\PublicPublicGetSuppressionSending::class, []);
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
	): \FoundryCo\Cloudflare\Responses\PublicPublicListSuppressionZoneRouting
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/routing/suppression', \FoundryCo\Cloudflare\Responses\PublicPublicListSuppressionZoneRouting::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create zone email suppression
	 */
	public function postPublicNewSuppressionZoneRouting(
		\FoundryCo\Cloudflare\Requests\PostPublicNewSuppressionZoneRoutingRequest $request,
	): \FoundryCo\Cloudflare\Responses\PublicPublicNewSuppressionZoneRouting
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/routing/suppression', \FoundryCo\Cloudflare\Responses\PublicPublicNewSuppressionZoneRouting::class, $request);
	}


	/**
	 * Get zone email suppression
	 */
	public function getPublicGetSuppressionZoneRouting(
		string $suppressionId,
	): \FoundryCo\Cloudflare\Responses\PublicPublicGetSuppressionZoneRouting
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/routing/suppression/' . $suppressionId, \FoundryCo\Cloudflare\Responses\PublicPublicGetSuppressionZoneRouting::class, []);
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
	): \FoundryCo\Cloudflare\Responses\PublicPublicListSuppressionZoneSending
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/suppression', \FoundryCo\Cloudflare\Responses\PublicPublicListSuppressionZoneSending::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create zone email suppression
	 */
	public function postPublicNewSuppressionZoneSending(
		\FoundryCo\Cloudflare\Requests\PostPublicNewSuppressionZoneSendingRequest $request,
	): \FoundryCo\Cloudflare\Responses\PublicPublicNewSuppressionZoneSending
	{
		return $this->client->post('/zones/' . $this->zoneId . '/email/sending/suppression', \FoundryCo\Cloudflare\Responses\PublicPublicNewSuppressionZoneSending::class, $request);
	}


	/**
	 * Get zone email suppression
	 */
	public function getPublicGetSuppressionZoneSending(
		string $suppressionId,
	): \FoundryCo\Cloudflare\Responses\PublicPublicGetSuppressionZoneSending
	{
		return $this->client->get('/zones/' . $this->zoneId . '/email/sending/suppression/' . $suppressionId, \FoundryCo\Cloudflare\Responses\PublicPublicGetSuppressionZoneSending::class, []);
	}


	/**
	 * Delete zone email suppression
	 */
	public function deletePublicDeleteSuppressionZoneSending(string $suppressionId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/email/sending/suppression/' . $suppressionId);
	}
}
