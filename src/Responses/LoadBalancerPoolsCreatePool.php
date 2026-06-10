<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class LoadBalancerPoolsCreatePool
{
	public function __construct(
		/** A list of regions from which to run health checks. Null means every Cloudflare data center. */
		public ?array $checkRegions = null,
		public ?\DateTimeImmutable $createdOn = null,
		/** A human-readable description of the pool. */
		public ?string $description = null,
		/** This field shows up only if the pool is disabled. This field is set with the time the pool was disabled at. */
		public ?\DateTimeImmutable $disabledAt = null,
		/** Whether to enable (the default) or disable this pool. Disabled pools will not receive traffic and are excluded from health checks. Disabling a pool will cause any load balancers using it to failover to the next pool (if any). */
		public ?bool $enabled = null,
		public ?string $id = null,
		/** The latitude of the data center containing the origins used in this pool in decimal degrees. If this is set, longitude must also be set. */
		public ?float $latitude = null,
		/** Configures load shedding policies and percentages for the pool. */
		public ?LoadBalancerPoolsCreatePoolLoadShedding $loadShedding = null,
		/** The longitude of the data center containing the origins used in this pool in decimal degrees. If this is set, latitude must also be set. */
		public ?float $longitude = null,
		/** The minimum number of origins that must be healthy for this pool to serve traffic. If the number of healthy origins falls below this number, the pool will be marked unhealthy and will failover to the next available pool. */
		public ?int $minimumOrigins = null,
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The ID of the Monitor to use for checking the health of origins within this pool. */
		public ?string $monitor = null,
		/** The ID of the Monitor Group to use for checking the health of origins within this pool. */
		public ?string $monitorGroup = null,
		/** A short name (tag) for the pool. Only alphanumeric characters, hyphens, and underscores are allowed. */
		public ?string $name = null,
		/** List of networks where Load Balancer or Pool is enabled. */
		public ?array $networks = null,
		/** This field is now deprecated. It has been moved to Cloudflare's Centralized Notification service https://developers.cloudflare.com/fundamentals/notifications/. The email address to send health status notifications to. This can be an individual mailbox or a mailing list. Multiple emails can be supplied as a comma delimited list. */
		public ?string $notificationEmail = null,
		/** Filter pool and origin health notifications by resource type or health status. Use null to reset. */
		public ?LoadBalancerPoolsCreatePoolNotificationFilter $notificationFilter = null,
		/** Configures origin steering for the pool. Controls how origins are selected for new sessions and traffic without session affinity. */
		public ?LoadBalancerPoolsCreatePoolOriginSteering $originSteering = null,
		/** The list of origins within this pool. Traffic directed at this pool is balanced across all currently healthy origins, provided the pool itself is healthy. */
		public ?array $origins = null,
	) {
	}
}
