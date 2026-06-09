<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Optional filters that allow you to be alerted only on a subset of events for that alert type based on some criteria. This is only available for select alert types. See alert type documentation for more details.
 */
readonly class NotificationPoliciesCreateANotificationPolicyRequestFilters
{
	public function __construct(
		/** Usage depends on specific alert type */
		public ?array $actions = null,
		/** Used for configuring radar_notification */
		public ?array $affectedAsns = null,
		/** Used for configuring incident_alert */
		public ?array $affectedComponents = null,
		/** Used for configuring radar_notification */
		public ?array $affectedLocations = null,
		/** Used for configuring maintenance_event_notification */
		public ?array $airportCode = null,
		/** Usage depends on specific alert type */
		public ?array $alertTriggerPreferences = null,
		/** Usage depends on specific alert type */
		public ?array $alertTriggerPreferencesValue = null,
		/** Used for configuring load_balancing_pool_enablement_alert */
		public ?array $enabled = null,
		/** Used for configuring pages_event_alert */
		public ?array $environment = null,
		/** Used for configuring pages_event_alert */
		public ?array $event = null,
		/** Used for configuring load_balancing_health_alert */
		public ?array $eventSource = null,
		/** Usage depends on specific alert type */
		public ?array $eventType = null,
		/** Usage depends on specific alert type */
		public ?array $groupBy = null,
		/** Used for configuring health_check_status_notification */
		public ?array $healthCheckId = null,
		/** Used for configuring incident_alert */
		public ?array $incidentImpact = null,
		/** Used for configuring stream_live_notifications */
		public ?array $inputId = null,
		/** Used for configuring security_insights_alert */
		public ?array $insightClass = null,
		/** Used for configuring billing_usage_alert */
		public ?array $limit = null,
		/** Used for configuring logo_match_alert */
		public ?array $logoTag = null,
		/** Used for configuring advanced_ddos_attack_l4_alert */
		public ?array $megabitsPerSecond = null,
		/** Used for configuring load_balancing_health_alert */
		public ?array $newHealth = null,
		/** Used for configuring tunnel_health_event */
		public ?array $newStatus = null,
		/** Used for configuring advanced_ddos_attack_l4_alert */
		public ?array $packetsPerSecond = null,
		/** Usage depends on specific alert type */
		public ?array $poolId = null,
		/** Usage depends on specific alert type */
		public ?array $popNames = null,
		/** Used for configuring billing_usage_alert */
		public ?array $product = null,
		/** Used for configuring pages_event_alert */
		public ?array $projectId = null,
		/** Used for configuring advanced_ddos_attack_l4_alert */
		public ?array $protocol = null,
		/** Usage depends on specific alert type */
		public ?array $queryTag = null,
		/** Used for configuring advanced_ddos_attack_l7_alert */
		public ?array $requestsPerSecond = null,
		/** Usage depends on specific alert type */
		public ?array $selectors = null,
		/** Used for configuring clickhouse_alert_fw_ent_anomaly */
		public ?array $services = null,
		/** Usage depends on specific alert type */
		public ?array $slo = null,
		/** Used for configuring health_check_status_notification */
		public ?array $status = null,
		/** Used for configuring advanced_ddos_attack_l7_alert */
		public ?array $targetHostname = null,
		/** Used for configuring advanced_ddos_attack_l4_alert */
		public ?array $targetIp = null,
		/** Used for configuring advanced_ddos_attack_l7_alert */
		public ?array $targetZoneName = null,
		/** Used for configuring traffic_anomalies_alert */
		public ?array $trafficExclusions = null,
		/** Used for configuring tunnel_health_event */
		public ?array $tunnelId = null,
		/** Usage depends on specific alert type */
		public ?array $tunnelName = null,
		/** Usage depends on specific alert type */
		public ?array $type = null,
		/** Usage depends on specific alert type */
		public ?array $where = null,
		/** Usage depends on specific alert type */
		public ?array $zones = null,
	) {
	}
}
