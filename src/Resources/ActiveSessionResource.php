<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ActiveSessionResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Fetch details of an active session
	 */
	public function get(string $meetingId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/active-session', null, []);
	}


	/**
	 * Kick participants from an active session
	 */
	public function create(
		string $appId,
		string $meetingId,
		\FoundryCo\Cloudflare\Requests\KickPartcipantsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/active-session/kick', null, $request);
	}


	/**
	 * Kick all participants
	 */
	public function kickAll(string $appId, string $meetingId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/active-session/kick-all', null, null);
	}


	/**
	 * Mute participants of an active session
	 */
	public function mute(
		string $appId,
		string $meetingId,
		\FoundryCo\Cloudflare\Requests\MuteParticipantsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/active-session/mute', null, $request);
	}


	/**
	 * Mute all participants
	 */
	public function muteAll(
		string $appId,
		string $meetingId,
		\FoundryCo\Cloudflare\Requests\MuteAllParticipantsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/active-session/mute-all', null, $request);
	}


	/**
	 * Create a poll
	 */
	public function poll(
		string $appId,
		string $meetingId,
		\FoundryCo\Cloudflare\Requests\CreatePollRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/meetings/' . $meetingId . '/active-session/poll', null, $request);
	}
}
