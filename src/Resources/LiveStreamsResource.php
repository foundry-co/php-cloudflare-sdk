<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LiveStreamsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Fetch day-wise analytics data for your livestreams
	 */
	public function get(string $appId, ?int $startTime = null, ?int $endTime = null, ?string $filters = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/analytics/livestreams/daywise', null, ['startTime' => $startTime ?? null, 'endTime' => $endTime ?? null, 'filters' => $filters ?? null]);
	}


	/**
	 * Fetch complete analytics data for your livestreams
	 */
	public function overall(string $appId, ?int $startTime = null, ?int $endTime = null, ?string $filters = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/analytics/livestreams/overall', null, ['startTime' => $startTime ?? null, 'endTime' => $endTime ?? null, 'filters' => $filters ?? null]);
	}


	/**
	 * Fetch all livestreams
	 */
	public function livestreams(
		?bool $excludeMeetings = null,
		?int $perPage = null,
		?int $pageNo = null,
		?\FoundryCo\Cloudflare\Enums\LiveStreamsStatus $status = null,
		?\DateTimeImmutable $startTime = null,
		?\DateTimeImmutable $endTime = null,
		?\FoundryCo\Cloudflare\Enums\LiveStreamsSortOrder $sortOrder = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/livestreams', null, ['excludeMeetings' => $excludeMeetings ?? null, 'perPage' => $perPage ?? null, 'pageNo' => $pageNo ?? null, 'status' => $status ?? null, 'startTime' => $startTime ?? null, 'endTime' => $endTime ?? null, 'sortOrder' => $sortOrder ?? null]);
	}


	/**
	 * Create an independent livestream
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PostAccountsaccountIdRealtimeKitappIdLivestreamsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/livestreams', null, $request);
	}


	/**
	 * Fetch livestream session details using livestream session ID
	 */
	public function sessions(string $appId, string $livestreamSessionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/livestreams/sessions/' . $livestream-session-id, null, []);
	}


	/**
	 * Fetch livestream details using livestream ID
	 */
	public function getV2LivestreamSessionLivestreamId(
		string $appId,
		string $livestreamId,
		?int $pageNo = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/livestreams/' . $livestreamId, null, ['pageNo' => $pageNo ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Fetch active livestream session details
	 */
	public function activeLivestreamSession(string $appId, string $livestreamId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/livestreams/' . $livestreamId . '/active-livestream-session', null, []);
	}


	/**
	 * Fetch active livestreams for a meeting
	 */
	public function activeLivestream(string $meetingId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/active-livestream', null, []);
	}


	/**
	 * Stop livestreaming a meeting
	 */
	public function stop(string $meetingId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/active-livestream/stop', null, null);
	}


	/**
	 * Fetch livestream session details for a meeting
	 */
	public function livestream(string $meetingId, ?int $pageNo = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/livestream', null, ['pageNo' => $pageNo ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Start livestreaming a meeting
	 */
	public function startLivestreaming(
		string $meetingId,
		\FoundryCo\Cloudflare\Requests\StartLivestreamingRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/livestreams', null, $request);
	}


	/**
	 * Fetch livestream session details using a session ID
	 */
	public function livestreamSessions(
		string $appId,
		string $sessionId,
		?float $perPage = null,
		?float $pageNo = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/sessions/' . $sessionId . '/livestream-sessions', null, ['perPage' => $perPage ?? null, 'pageNo' => $pageNo ?? null]);
	}
}
