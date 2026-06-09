<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Defines settings for this rule. Settings apply only to specific rule types and must use compatible selectors. If Terraform detects drift, confirm the setting supports your rule type and check whether the API modifies the value. Use API-returned values in your configuration to prevent drift.
 */
readonly class ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettings
{
	public function __construct(
		/** Add custom headers to allowed requests as key-value pairs. Use header names as keys that map to arrays of header values. Settable only for `http` rules with the action set to `allow`. */
		public ?array $addHeaders = null,
		/** Set to enable MSP children to bypass this rule. Only parent MSP accounts can set this. this rule. Settable for all types of rules. */
		public ?bool $allowChildBypass = null,
		/** Define the settings for the Audit SSH action. Settable only for `l4` rules with `audit_ssh` action. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsAuditSsh $auditSsh = null,
		/** Configure browser isolation behavior. Settable only for `http` rules with the action set to `isolate`. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsBisoAdminControls $bisoAdminControls = null,
		/** Configure custom block page settings. If missing or null, use the account settings. Settable only for `http` rules with the action set to `block`. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsBlockPage $blockPage = null,
		/** Enable the custom block page. Settable only for `dns` rules with action `block`. */
		public ?bool $blockPageEnabled = null,
		/** Explain why the rule blocks the request. The custom block page shows this text (if enabled). Settable only for `dns`, `l4`, and `http` rules when the action set to `block`. */
		public ?string $blockReason = null,
		/** Set to enable MSP accounts to bypass their parent's rules. Only MSP child accounts can set this. Settable for all types of rules. */
		public ?bool $bypassParentRule = null,
		/** Configure session check behavior. Settable only for `l4` and `http` rules with the action set to `allow`. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsCheckSession $checkSession = null,
		/** Configure custom resolvers to route queries that match the resolver policy. Unused with 'resolve_dns_through_cloudflare' or 'resolve_dns_internally' settings. DNS queries get routed to the address closest to their origin. Only valid when a rule's action set to 'resolve'. Settable only for `dns_resolver` rules. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsDnsResolvers $dnsResolvers = null,
		/** Configure how Gateway Proxy traffic egresses. You can enable this setting for rules with Egress actions and filters, or omit it to indicate local egress via WARP IPs. Settable only for `egress` rules. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsEgress $egress = null,
		/** Configure whether a copy of the HTTP request will be sent to storage when the rule matches. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsForensicCopy $forensicCopy = null,
		/** Ignore category matches at CNAME domains in a response. When off, evaluate categories in this rule against all CNAME domain categories in the response. Settable only for `dns` and `dns_resolver` rules. */
		public ?bool $ignoreCnameCategoryMatches = null,
		/** Specify whether to disable DNSSEC validation (for Allow actions) [INSECURE]. Settable only for `dns` rules. */
		public ?bool $insecureDisableDnssecValidation = null,
		/** Enable IPs in DNS resolver category blocks. The system blocks only domain name categories unless you enable this setting. Settable only for `dns` and `dns_resolver` rules. */
		public ?bool $ipCategories = null,
		/** Indicates whether to include IPs in DNS resolver indicator feed blocks. Default, indicator feeds block only domain names. Settable only for `dns` and `dns_resolver` rules. */
		public ?bool $ipIndicatorFeeds = null,
		/** Send matching traffic to the supplied destination IP address and port. Settable only for `l4` rules with the action set to `l4_override`. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsL4override $l4override = null,
		/** Configure a notification to display on the user's device when this rule matched. Settable for all types of rules with the action set to `block`. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsNotificationSettings $notificationSettings = null,
		/** Defines a hostname for override, for the matching DNS queries. Settable only for `dns` rules with the action set to `override`. */
		public ?string $overrideHost = null,
		/** Defines a an IP or set of IPs for overriding matched DNS queries. Settable only for `dns` rules with the action set to `override`. */
		public ?array $overrideIps = null,
		/** Configure DLP payload logging. Settable only for `http` rules. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsPayloadLog $payloadLog = null,
		/** Configure settings that apply to quarantine rules. Settable only for `http` rules. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsQuarantine $quarantine = null,
		/** Apply settings to redirect rules. Settable only for `http` rules with the action set to `redirect`. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsRedirect $redirect = null,
		/** Configure to forward the query to the internal DNS service, passing the specified 'view_id' as input. Not used when 'dns_resolvers' is specified or 'resolve_dns_through_cloudflare' is set. Only valid when a rule's action set to 'resolve'. Settable only for `dns_resolver` rules. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsResolveDnsInternally $resolveDnsInternally = null,
		/** Enable to send queries that match the policy to Cloudflare's default 1.1.1.1 DNS resolver. Cannot set when 'dns_resolvers' specified or 'resolve_dns_internally' is set. Only valid when a rule's action set to 'resolve'. Settable only for `dns_resolver` rules. */
		public ?bool $resolveDnsThroughCloudflare = null,
		/** Configure behavior when an upstream certificate is invalid or an SSL error occurs. Settable only for `http` rules with the action set to `allow`. */
		public ?ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsUntrustedCert $untrustedCert = null,
	) {
	}
}
