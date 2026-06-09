<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MeetingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Fetch all meetings for an App
	 */
	public function get(
		string $appId,
		?float $pageNo = null,
		?float $perPage = null,
		?\DateTimeImmutable $startTime = null,
		?\DateTimeImmutable $endTime = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\MeetingsStatus $status = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings', null, ['pageNo' => $pageNo ?? null, 'perPage' => $perPage ?? null, 'startTime' => $startTime ?? null, 'endTime' => $endTime ?? null, 'search' => $search ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Create a meeting
	 */
	public function create(string $appId, \FoundryCo\Cloudflare\Requests\CreateMeetingRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings', null, $request);
	}


	/**
	 * Fetch a meeting for an App
	 */
	public function meetings(string $meetingId, ?string $name = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId, null, ['name' => $name ?? null]);
	}


	/**
	 * Replace a meeting
	 */
	public function update(string $meetingId, \FoundryCo\Cloudflare\Requests\ReplaceMeetingRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId, null, $request);
	}


	/**
	 * Update a meeting
	 */
	public function updateMeeting(string $meetingId, \FoundryCo\Cloudflare\Requests\UpdateMeetingRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId, null, $request);
	}


	/**
	 * Fetch all participants of a meeting
	 */
	public function participants(string $appId, string $meetingId, ?float $pageNo = null, ?float $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/participants', null, ['pageNo' => $pageNo ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Add a participant
	 */
	public function addParticipant(
		string $appId,
		string $meetingId,
		\FoundryCo\Cloudflare\Requests\AddParticipantRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/participants', null, $request);
	}


	/**
	 * Fetch a participant's detail
	 */
	public function getMeetingParticipant(string $meetingId, string $participantId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/participants/' . $participantId, null, []);
	}


	/**
	 * Replace a participant's detail
	 */
	public function replaceParticipant(
		string $meetingId,
		string $participantId,
		\FoundryCo\Cloudflare\Requests\ReplaceParticipantRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/participants/' . $participantId, null, $request);
	}


	/**
	 * Edit a participant's detail
	 */
	public function editParticipant(
		string $meetingId,
		string $participantId,
		\FoundryCo\Cloudflare\Requests\EditParticipantRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/participants/' . $participantId, null, $request);
	}


	/**
	 * Delete a participant
	 */
	public function delete(string $meetingId, string $participantId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/participants/' . $participantId);
	}


	/**
	 * Refresh participant's authentication token
	 */
	public function token(string $appId, string $meetingId, string $participantId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/participants/' . $participantId . '/token', null, null);
	}
}
