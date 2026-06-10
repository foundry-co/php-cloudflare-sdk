<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SessionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Fetch all sessions of an App
	 */
	public function get(
		string $appId,
		?float $pageNo = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\SessionsSortBy $sortBy = null,
		?\FoundryCo\Cloudflare\Enums\SessionsSortOrder $sortOrder = null,
		?\DateTimeImmutable $startTime = null,
		?\DateTimeImmutable $endTime = null,
		?string $participants = null,
		?\FoundryCo\Cloudflare\Enums\SessionsStatus $status = null,
		?string $search = null,
		?string $associatedId = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/sessions', null, ['pageNo' => $pageNo ?? null, 'perPage' => $perPage ?? null, 'sortBy' => $sortBy ?? null, 'sortOrder' => $sortOrder ?? null, 'startTime' => $startTime ?? null, 'endTime' => $endTime ?? null, 'participants' => $participants ?? null, 'status' => $status ?? null, 'search' => $search ?? null, 'associatedId' => $associatedId ?? null]);
	}


	/**
	 * Fetch details of peer
	 */
	public function peerReport(
		string $appId,
		string $peerId,
		?\FoundryCo\Cloudflare\Enums\SessionsFilters $filters = null,
		?bool $includePeerEvents = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/sessions/peer-report/' . $peerId, null, ['filters' => $filters ?? null, 'includePeerEvents' => $includePeerEvents ?? null]);
	}


	/**
	 * Fetch details of a session
	 */
	public function sessions(string $appId, string $sessionId, ?bool $includeBreakoutRooms = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/sessions/' . $sessionId, null, ['includeBreakoutRooms' => $includeBreakoutRooms ?? null]);
	}


	/**
	 * Fetch all chat messages of a session
	 */
	public function chat(string $appId, string $sessionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/sessions/' . $sessionId . '/chat', null, []);
	}


	/**
	 * Fetch participants list of a session
	 */
	public function participants(
		string $appId,
		string $sessionId,
		?string $search = null,
		?float $pageNo = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\SessionsSortOrder $sortOrder = null,
		?\FoundryCo\Cloudflare\Enums\SessionsSortBy $sortBy = null,
		?bool $includePeerEvents = null,
		?\FoundryCo\Cloudflare\Enums\SessionsView $view = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/sessions/' . $sessionId . '/participants', null, ['search' => $search ?? null, 'pageNo' => $pageNo ?? null, 'perPage' => $perPage ?? null, 'sortOrder' => $sortOrder ?? null, 'sortBy' => $sortBy ?? null, 'includePeerEvents' => $includePeerEvents ?? null, 'view' => $view ?? null]);
	}


	/**
	 * Fetch details of a participant
	 */
	public function getParticipantDetails(
		string $appId,
		string $participantId,
		string $sessionId,
		?\FoundryCo\Cloudflare\Enums\SessionsFilters $filters = null,
		?bool $includePeerEvents = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/sessions/' . $sessionId . '/participants/' . $participantId, null, ['filters' => $filters ?? null, 'includePeerEvents' => $includePeerEvents ?? null]);
	}


	/**
	 * Fetch summary of transcripts for a session
	 */
	public function summary(string $appId, string $sessionId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/sessions/' . $sessionId . '/summary', null, []);
	}


	/**
	 * Generate summary of Transcripts for the session
	 */
	public function create(string $appId, string $sessionId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/sessions/' . $sessionId . '/summary', null, null);
	}


	/**
	 * Fetch the complete transcript for a session
	 */
	public function transcript(
		string $appId,
		string $sessionId,
		?\FoundryCo\Cloudflare\Enums\SessionsFormat $format = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/sessions/' . $sessionId . '/transcript', null, ['format' => $format ?? null]);
	}
}
