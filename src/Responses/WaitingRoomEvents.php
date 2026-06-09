<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WaitingRoomEvents
{
	public function __construct(
		public ?\DateTimeImmutable $createdOn = null,
		/** If set, the event will override the waiting room's `custom_page_html` property while it is active. If null, the event will inherit it. */
		public ?string $customPageHtml = null,
		/** A note that you can use to add more details about the event. */
		public ?string $description = null,
		/** If set, the event will override the waiting room's `disable_session_renewal` property while it is active. If null, the event will inherit it. */
		public ?bool $disableSessionRenewal = null,
		/** An ISO 8601 timestamp that marks the end of the event. */
		public ?string $eventEndTime = null,
		/** An ISO 8601 timestamp that marks the start of the event. At this time, queued users will be processed with the event's configuration. The start time must be at least one minute before `event_end_time`. */
		public ?string $eventStartTime = null,
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedOn = null,
		/** A unique name to identify the event. Only alphanumeric characters, hyphens and underscores are allowed. */
		public ?string $name = null,
		/** If set, the event will override the waiting room's `new_users_per_minute` property while it is active. If null, the event will inherit it. This can only be set if the event's `total_active_users` property is also set. */
		public ?int $newUsersPerMinute = null,
		/** An ISO 8601 timestamp that marks when to begin queueing all users before the event starts. The prequeue must start at least five minutes before `event_start_time`. */
		public ?string $prequeueStartTime = null,
		/** If set, the event will override the waiting room's `queueing_method` property while it is active. If null, the event will inherit it. */
		public ?string $queueingMethod = null,
		/** If set, the event will override the waiting room's `session_duration` property while it is active. If null, the event will inherit it. */
		public ?int $sessionDuration = null,
		/** If enabled, users in the prequeue will be shuffled randomly at the `event_start_time`. Requires that `prequeue_start_time` is not null. This is useful for situations when many users will join the event prequeue at the same time and you want to shuffle them to ensure fairness. Naturally, it makes the most sense to enable this feature when the `queueing_method` during the event respects ordering such as **fifo**, or else the shuffling may be unnecessary. */
		public ?bool $shuffleAtEventStart = null,
		/** Suspends or allows an event. If set to `true`, the event is ignored and traffic will be handled based on the waiting room configuration. */
		public ?bool $suspended = null,
		/** If set, the event will override the waiting room's `total_active_users` property while it is active. If null, the event will inherit it. This can only be set if the event's `new_users_per_minute` property is also set. */
		public ?int $totalActiveUsers = null,
		/** If set, the event will override the waiting room's `turnstile_action` property while it is active. If null, the event will inherit it. */
		public ?\FoundryCo\Cloudflare\Enums\WaitingRoomEventsTurnstileAction $turnstileAction = null,
		/** If set, the event will override the waiting room's `turnstile_mode` property while it is active. If null, the event will inherit it. */
		public ?\FoundryCo\Cloudflare\Enums\WaitingRoomEventsTurnstileMode $turnstileMode = null,
	) {
	}
}
