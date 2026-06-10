<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum GetZonesZoneIdLogpushJobsDataset: string
{
	case AccessRequests = 'access_requests';
	case AuditLogs = 'audit_logs';
	case AuditLogsV2 = 'audit_logs_v2';
	case BisoUserActions = 'biso_user_actions';
	case CasbFindings = 'casb_findings';
	case DevicePostureResults = 'device_posture_results';
	case DexApplicationTests = 'dex_application_tests';
	case DexDeviceStateEvents = 'dex_device_state_events';
	case DlpForensicCopies = 'dlp_forensic_copies';
	case DnsFirewallLogs = 'dns_firewall_logs';
	case DnsLogs = 'dns_logs';
	case EmailSecurityAlerts = 'email_security_alerts';
	case EmailSecurityPostDeliveryEvents = 'email_security_post_delivery_events';
	case FirewallEvents = 'firewall_events';
	case GatewayDns = 'gateway_dns';
	case GatewayHttp = 'gateway_http';
	case GatewayNetwork = 'gateway_network';
	case HttpRequests = 'http_requests';
	case IpsecLogs = 'ipsec_logs';
	case MagicIdsDetections = 'magic_ids_detections';
	case McpPortalLogs = 'mcp_portal_logs';
	case MnmFlowLogs = 'mnm_flow_logs';
	case NelReports = 'nel_reports';
	case NetworkAnalyticsLogs = 'network_analytics_logs';
	case PageShieldEvents = 'page_shield_events';
	case SinkholeHttpLogs = 'sinkhole_http_logs';
	case SpectrumEvents = 'spectrum_events';
	case SshLogs = 'ssh_logs';
	case TurnstileEvents = 'turnstile_events';
	case WarpConfigChanges = 'warp_config_changes';
	case WarpToggleChanges = 'warp_toggle_changes';
	case WorkersTraceEvents = 'workers_trace_events';
	case ZarazEvents = 'zaraz_events';
	case ZeroTrustNetworkSessions = 'zero_trust_network_sessions';
}
