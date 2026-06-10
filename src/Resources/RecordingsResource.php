<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RecordingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Fetch all recordings for an App
	 */
	public function get(
		string $appId,
		?string $meetingId = null,
		?float $pageNo = null,
		?float $perPage = null,
		?bool $expired = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\RecordingsSortBy $sortBy = null,
		?\FoundryCo\Cloudflare\Enums\RecordingsSortOrder $sortOrder = null,
		?\DateTimeImmutable $startTime = null,
		?\DateTimeImmutable $endTime = null,
		?array $status = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/recordings', null, ['meetingId' => $meetingId ?? null, 'pageNo' => $pageNo ?? null, 'perPage' => $perPage ?? null, 'expired' => $expired ?? null, 'search' => $search ?? null, 'sortBy' => $sortBy ?? null, 'sortOrder' => $sortOrder ?? null, 'startTime' => $startTime ?? null, 'endTime' => $endTime ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Start recording a meeting
	 */
	public function create(string $appId, \FoundryCo\Cloudflare\Requests\StartRecordingRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/recordings', null, $request);
	}


	/**
	 * Fetch active recording
	 */
	public function activeRecording(string $appId, string $meetingId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/recordings/active-recording/' . $meetingId, null, []);
	}


	/**
	 * Start recording participant audio tracks
	 */
	public function track(
		string $appId,
		\FoundryCo\Cloudflare\Requests\StartTrackRecordingForAMeetingRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/recordings/track', null, $request);
	}


	/**
	 * Fetch details of a recording
	 */
	public function recordings(string $appId, string $recordingId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/recordings/' . $recordingId, null, []);
	}


	/**
	 * Pause/Resume/Stop recording
	 */
	public function update(
		string $appId,
		string $recordingId,
		\FoundryCo\Cloudflare\Requests\PauseResumeStopRecordingRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/recordings/' . $recordingId, null, $request);
	}
}
