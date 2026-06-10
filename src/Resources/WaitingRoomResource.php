<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class WaitingRoomResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List waiting rooms for account
	 */
	public function list(?float $page = null, ?float $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/waiting_rooms', \FoundryCo\Cloudflare\Responses\WaitingRoomListWaitingRoomsAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * List waiting rooms for zone
	 */
	public function waitingRooms(?float $page = null, ?float $perPage = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms', \FoundryCo\Cloudflare\Responses\WaitingRoomListWaitingRooms::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create waiting room
	 */
	public function create(\FoundryCo\Cloudflare\Requests\WaitingRoomCreateWaitingRoomRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/waiting_rooms', \FoundryCo\Cloudflare\Responses\WaitingRoomCreateWaitingRoom::class, $request);
	}


	/**
	 * Create a custom waiting room page preview
	 */
	public function preview(
		\FoundryCo\Cloudflare\Requests\WaitingRoomCreateACustomWaitingRoomPagePreviewRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/waiting_rooms/preview', \FoundryCo\Cloudflare\Responses\WaitingRoomCreateACustomWaitingRoomPagePreview::class, $request);
	}


	/**
	 * Get zone-level Waiting Room settings
	 */
	public function settings(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/settings', \FoundryCo\Cloudflare\Responses\WaitingRoomGetZoneSettings::class, []);
	}


	/**
	 * Update zone-level Waiting Room settings
	 */
	public function update(\FoundryCo\Cloudflare\Requests\WaitingRoomUpdateZoneSettingsRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/waiting_rooms/settings', \FoundryCo\Cloudflare\Responses\WaitingRoomUpdateZoneSettings::class, $request);
	}


	/**
	 * Patch zone-level Waiting Room settings
	 */
	public function waitingRoomPatchZoneSettings(
		\FoundryCo\Cloudflare\Requests\WaitingRoomPatchZoneSettingsRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/waiting_rooms/settings', \FoundryCo\Cloudflare\Responses\WaitingRoomPatchZoneSettings::class, $request);
	}


	/**
	 * Waiting room details
	 */
	public function get(string $waitingRoomId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId, \FoundryCo\Cloudflare\Responses\WaitingRoomWaitingRoomDetails::class, []);
	}


	/**
	 * Update waiting room
	 */
	public function waitingRoomUpdateWaitingRoom(
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomUpdateWaitingRoomRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId, \FoundryCo\Cloudflare\Responses\WaitingRoomUpdateWaitingRoom::class, $request);
	}


	/**
	 * Patch waiting room
	 */
	public function waitingRoomPatchWaitingRoom(
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomPatchWaitingRoomRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId, \FoundryCo\Cloudflare\Responses\WaitingRoomPatchWaitingRoom::class, $request);
	}


	/**
	 * Delete waiting room
	 */
	public function delete(string $waitingRoomId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId);
	}


	/**
	 * List events
	 */
	public function events(string $waitingRoomId, ?float $page = null, ?float $perPage = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events', \FoundryCo\Cloudflare\Responses\WaitingRoomListEvents::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create event
	 */
	public function waitingRoomCreateEvent(
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomCreateEventRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events', \FoundryCo\Cloudflare\Responses\WaitingRoomCreateEvent::class, $request);
	}


	/**
	 * Event details
	 */
	public function waitingRoomEventDetails(string $eventId, string $waitingRoomId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events/' . $eventId, \FoundryCo\Cloudflare\Responses\WaitingRoomEventDetails::class, []);
	}


	/**
	 * Update event
	 */
	public function waitingRoomUpdateEvent(
		string $eventId,
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomUpdateEventRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events/' . $eventId, \FoundryCo\Cloudflare\Responses\WaitingRoomUpdateEvent::class, $request);
	}


	/**
	 * Patch event
	 */
	public function waitingRoomPatchEvent(
		string $eventId,
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomPatchEventRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events/' . $eventId, \FoundryCo\Cloudflare\Responses\WaitingRoomPatchEvent::class, $request);
	}


	/**
	 * Delete event
	 */
	public function waitingRoomDeleteEvent(string $eventId, string $waitingRoomId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events/' . $eventId);
	}


	/**
	 * Preview active event details
	 */
	public function details(string $eventId, string $waitingRoomId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events/' . $eventId . '/details', \FoundryCo\Cloudflare\Responses\WaitingRoomPreviewActiveEventDetails::class, []);
	}


	/**
	 * List Waiting Room Rules
	 */
	public function rules(string $waitingRoomId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/rules', \FoundryCo\Cloudflare\Responses\WaitingRoomListWaitingRoomRules::class, []);
	}


	/**
	 * Create Waiting Room Rule
	 */
	public function waitingRoomCreateWaitingRoomRule(
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomCreateWaitingRoomRuleRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/rules', \FoundryCo\Cloudflare\Responses\WaitingRoomCreateWaitingRoomRule::class, $request);
	}


	/**
	 * Replace Waiting Room Rules
	 */
	public function waitingRoomReplaceWaitingRoomRules(string $waitingRoomId): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/rules', \FoundryCo\Cloudflare\Responses\WaitingRoomReplaceWaitingRoomRules::class, null);
	}


	/**
	 * Patch Waiting Room Rule
	 */
	public function waitingRoomPatchWaitingRoomRule(
		string $ruleId,
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomPatchWaitingRoomRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\WaitingRoomPatchWaitingRoomRule::class, $request);
	}


	/**
	 * Delete Waiting Room Rule
	 */
	public function waitingRoomDeleteWaitingRoomRule(string $ruleId, string $waitingRoomId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/rules/' . $ruleId);
	}


	/**
	 * Get waiting room status
	 */
	public function status(string $waitingRoomId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/status', \FoundryCo\Cloudflare\Responses\WaitingRoomGetWaitingRoomStatus::class, []);
	}
}
