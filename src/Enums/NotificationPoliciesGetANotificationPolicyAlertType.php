<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum NotificationPoliciesGetANotificationPolicyAlertType: string
{
	case AbuseReportAlert = 'abuse_report_alert';
	case AccessCustomCertificateExpirationType = 'access_custom_certificate_expiration_type';
	case AdvancedDdosAttackL4Alert = 'advanced_ddos_attack_l4_alert';
	case AdvancedDdosAttackL7Alert = 'advanced_ddos_attack_l7_alert';
	case AdvancedHttpAlertError = 'advanced_http_alert_error';
	case BgpHijackNotification = 'bgp_hijack_notification';
	case BillingUsageAlert = 'billing_usage_alert';
	case BlockNotificationBlockRemoved = 'block_notification_block_removed';
	case BlockNotificationNewBlock = 'block_notification_new_block';
	case BlockNotificationReviewRejected = 'block_notification_review_rejected';
	case BotTrafficBasicAlert = 'bot_traffic_basic_alert';
	case BrandProtectionAlert = 'brand_protection_alert';
	case BrandProtectionDigest = 'brand_protection_digest';
	case ClickhouseAlertFwAnomaly = 'clickhouse_alert_fw_anomaly';
	case ClickhouseAlertFwEntAnomaly = 'clickhouse_alert_fw_ent_anomaly';
	case CloudforceOneRequestNotification = 'cloudforce_one_request_notification';
	case CniMaintenanceNotification = 'cni_maintenance_notification';
	case CustomAnalytics = 'custom_analytics';
	case CustomBotDetectionAlert = 'custom_bot_detection_alert';
	case CustomSslCertificateEventType = 'custom_ssl_certificate_event_type';
	case DedicatedSslCertificateEventType = 'dedicated_ssl_certificate_event_type';
	case DeviceConnectivityAnomalyAlert = 'device_connectivity_anomaly_alert';
	case DosAttackL4 = 'dos_attack_l4';
	case DosAttackL7 = 'dos_attack_l7';
	case ExpiringServiceTokenAlert = 'expiring_service_token_alert';
	case FailingLogpushJobDisabledAlert = 'failing_logpush_job_disabled_alert';
	case FbmAutoAdvertisement = 'fbm_auto_advertisement';
	case FbmDosdAttack = 'fbm_dosd_attack';
	case FbmVolumetricAttack = 'fbm_volumetric_attack';
	case HealthCheckStatusNotification = 'health_check_status_notification';
	case HostnameAopCustomCertificateExpirationType = 'hostname_aop_custom_certificate_expiration_type';
	case HttpAlertEdgeError = 'http_alert_edge_error';
	case HttpAlertOriginError = 'http_alert_origin_error';
	case ImageNotification = 'image_notification';
	case ImageResizingNotification = 'image_resizing_notification';
	case IncidentAlert = 'incident_alert';
	case LoadBalancingHealthAlert = 'load_balancing_health_alert';
	case LoadBalancingPoolEnablementAlert = 'load_balancing_pool_enablement_alert';
	case LogoMatchAlert = 'logo_match_alert';
	case MagicTunnelHealthCheckEvent = 'magic_tunnel_health_check_event';
	case MagicWanTunnelHealth = 'magic_wan_tunnel_health';
	case MaintenanceEventNotification = 'maintenance_event_notification';
	case MtlsCertificateStoreCertificateExpirationType = 'mtls_certificate_store_certificate_expiration_type';
	case PagesEventAlert = 'pages_event_alert';
	case RadarNotification = 'radar_notification';
	case RealOriginMonitoring = 'real_origin_monitoring';
	case ScriptmonitorAlertNewCodeChangeDetections = 'scriptmonitor_alert_new_code_change_detections';
	case ScriptmonitorAlertNewHosts = 'scriptmonitor_alert_new_hosts';
	case ScriptmonitorAlertNewMaliciousHosts = 'scriptmonitor_alert_new_malicious_hosts';
	case ScriptmonitorAlertNewMaliciousScripts = 'scriptmonitor_alert_new_malicious_scripts';
	case ScriptmonitorAlertNewMaliciousUrl = 'scriptmonitor_alert_new_malicious_url';
	case ScriptmonitorAlertNewMaxLengthResourceUrl = 'scriptmonitor_alert_new_max_length_resource_url';
	case ScriptmonitorAlertNewResources = 'scriptmonitor_alert_new_resources';
	case SecondaryDnsAllPrimariesFailing = 'secondary_dns_all_primaries_failing';
	case SecondaryDnsPrimariesFailing = 'secondary_dns_primaries_failing';
	case SecondaryDnsWarning = 'secondary_dns_warning';
	case SecondaryDnsZoneSuccessfullyUpdated = 'secondary_dns_zone_successfully_updated';
	case SecondaryDnsZoneValidationWarning = 'secondary_dns_zone_validation_warning';
	case SecurityInsightsAlert = 'security_insights_alert';
	case SentinelAlert = 'sentinel_alert';
	case StreamLiveNotifications = 'stream_live_notifications';
	case SyntheticTestLatencyAlert = 'synthetic_test_latency_alert';
	case SyntheticTestLowAvailabilityAlert = 'synthetic_test_low_availability_alert';
	case TrafficAnomaliesAlert = 'traffic_anomalies_alert';
	case TunnelHealthEvent = 'tunnel_health_event';
	case TunnelUpdateEvent = 'tunnel_update_event';
	case UniversalSslEventType = 'universal_ssl_event_type';
	case WebAnalyticsMetricsUpdate = 'web_analytics_metrics_update';
	case ZoneAopCustomCertificateExpirationType = 'zone_aop_custom_certificate_expiration_type';
}
