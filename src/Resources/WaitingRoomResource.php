<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(?float $page = null, ?float $perPage = null): \FoundryCo\Cloudflare\Responses\WaitingRoomAccount
	{
		return $this->client->get('/accounts/' . $this->accountId . '/waiting_rooms', \FoundryCo\Cloudflare\Responses\WaitingRoomAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * List waiting rooms for zone
	 */
	public function waitingRooms(
		?float $page = null,
		?float $perPage = null,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomRooms
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms', \FoundryCo\Cloudflare\Responses\WaitingRoomRooms::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create waiting room
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\WaitingRoomCreateWaitingRoomRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomRoom
	{
		return $this->client->post('/zones/' . $this->zoneId . '/waiting_rooms', \FoundryCo\Cloudflare\Responses\WaitingRoomRoom::class, $request);
	}


	/**
	 * Create a custom waiting room page preview
	 */
	public function preview(
		\FoundryCo\Cloudflare\Requests\WaitingRoomCreateACustomWaitingRoomPagePreviewRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomPreview
	{
		return $this->client->post('/zones/' . $this->zoneId . '/waiting_rooms/preview', \FoundryCo\Cloudflare\Responses\WaitingRoomPreview::class, $request);
	}


	/**
	 * Get zone-level Waiting Room settings
	 */
	public function settings(): \FoundryCo\Cloudflare\Responses\WaitingRoomSettings
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/settings', \FoundryCo\Cloudflare\Responses\WaitingRoomSettings::class, []);
	}


	/**
	 * Update zone-level Waiting Room settings
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\WaitingRoomUpdateZoneSettingsRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomSettings
	{
		return $this->client->put('/zones/' . $this->zoneId . '/waiting_rooms/settings', \FoundryCo\Cloudflare\Responses\WaitingRoomSettings::class, $request);
	}


	/**
	 * Patch zone-level Waiting Room settings
	 */
	public function waitingRoomPatchZoneSettings(
		\FoundryCo\Cloudflare\Requests\WaitingRoomPatchZoneSettingsRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomSettings
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/waiting_rooms/settings', \FoundryCo\Cloudflare\Responses\WaitingRoomSettings::class, $request);
	}


	/**
	 * Waiting room details
	 */
	public function get(string $waitingRoomId): \FoundryCo\Cloudflare\Responses\WaitingRoomDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId, \FoundryCo\Cloudflare\Responses\WaitingRoomDetails::class, []);
	}


	/**
	 * Update waiting room
	 */
	public function waitingRoomUpdateWaitingRoom(
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomUpdateWaitingRoomRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomRoom
	{
		return $this->client->put('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId, \FoundryCo\Cloudflare\Responses\WaitingRoomRoom::class, $request);
	}


	/**
	 * Patch waiting room
	 */
	public function waitingRoomPatchWaitingRoom(
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomPatchWaitingRoomRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomRoom
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId, \FoundryCo\Cloudflare\Responses\WaitingRoomRoom::class, $request);
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
	public function events(
		string $waitingRoomId,
		?float $page = null,
		?float $perPage = null,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomEvents
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events', \FoundryCo\Cloudflare\Responses\WaitingRoomEvents::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create event
	 */
	public function waitingRoomCreateEvent(
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomCreateEventRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomEvent
	{
		return $this->client->post('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events', \FoundryCo\Cloudflare\Responses\WaitingRoomEvent::class, $request);
	}


	/**
	 * Event details
	 */
	public function waitingRoomEventDetails(
		string $eventId,
		string $waitingRoomId,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events/' . $eventId, \FoundryCo\Cloudflare\Responses\WaitingRoomDetails::class, []);
	}


	/**
	 * Update event
	 */
	public function waitingRoomUpdateEvent(
		string $eventId,
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomUpdateEventRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomEvent
	{
		return $this->client->put('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events/' . $eventId, \FoundryCo\Cloudflare\Responses\WaitingRoomEvent::class, $request);
	}


	/**
	 * Patch event
	 */
	public function waitingRoomPatchEvent(
		string $eventId,
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomPatchEventRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomEvent
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events/' . $eventId, \FoundryCo\Cloudflare\Responses\WaitingRoomEvent::class, $request);
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
	public function details(string $eventId, string $waitingRoomId): \FoundryCo\Cloudflare\Responses\WaitingRoomDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/events/' . $eventId . '/details', \FoundryCo\Cloudflare\Responses\WaitingRoomDetails::class, []);
	}


	/**
	 * List Waiting Room Rules
	 */
	public function rules(string $waitingRoomId): \FoundryCo\Cloudflare\Responses\WaitingRoomRules
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/rules', \FoundryCo\Cloudflare\Responses\WaitingRoomRules::class, []);
	}


	/**
	 * Create Waiting Room Rule
	 */
	public function waitingRoomCreateWaitingRoomRule(
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomCreateWaitingRoomRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomRule
	{
		return $this->client->post('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/rules', \FoundryCo\Cloudflare\Responses\WaitingRoomRule::class, $request);
	}


	/**
	 * Replace Waiting Room Rules
	 */
	public function waitingRoomReplaceWaitingRoomRules(
		string $waitingRoomId,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomRules
	{
		return $this->client->put('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/rules', \FoundryCo\Cloudflare\Responses\WaitingRoomRules::class, null);
	}


	/**
	 * Patch Waiting Room Rule
	 */
	public function waitingRoomPatchWaitingRoomRule(
		string $ruleId,
		string $waitingRoomId,
		\FoundryCo\Cloudflare\Requests\WaitingRoomPatchWaitingRoomRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\WaitingRoomRule
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\WaitingRoomRule::class, $request);
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
	public function status(string $waitingRoomId): \FoundryCo\Cloudflare\Responses\WaitingRoomStatus
	{
		return $this->client->get('/zones/' . $this->zoneId . '/waiting_rooms/' . $waitingRoomId . '/status', \FoundryCo\Cloudflare\Responses\WaitingRoomStatus::class, []);
	}
}
