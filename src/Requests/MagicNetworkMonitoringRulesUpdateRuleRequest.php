<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update rule
 */
readonly class MagicNetworkMonitoringRulesUpdateRuleRequest
{
	public function __construct(
		/** Toggle on if you would like Cloudflare to automatically advertise the IP Prefixes within the rule via Magic Transit when the rule is triggered. Only available for users of Magic Transit. */
		public bool $automaticAdvertisement,
		/** The name of the rule. Must be unique. Supports characters A-Z, a-z, 0-9, underscore (_), dash (-), period (.), and tilde (~). You can’t have a space in the rule name. Max 256 characters. */
		public string $name,
		public array $prefixes,
		/** MNM rule type. */
		public \FoundryCo\Cloudflare\Enums\MagicNetworkMonitoringRulesUpdateRuleRequestType $type,
		/** The number of bits per second for the rule. When this value is exceeded for the set duration, an alert notification is sent. Minimum of 1 and no maximum. */
		public ?float $bandwidthThreshold = null,
		/** The amount of time that the rule threshold must be exceeded to send an alert notification. The final value must be equivalent to one of the following 8 values ["1m","5m","10m","15m","20m","30m","45m","60m"]. */
		public ?\FoundryCo\Cloudflare\Enums\MagicNetworkMonitoringRulesUpdateRuleRequestDuration $duration = null,
		/** The number of packets per second for the rule. When this value is exceeded for the set duration, an alert notification is sent. Minimum of 1 and no maximum. */
		public ?float $packetThreshold = null,
		/** Prefix match type to be applied for a prefix auto advertisement when using an advanced_ddos rule. */
		public ?\FoundryCo\Cloudflare\Enums\MagicNetworkMonitoringRulesUpdateRuleRequestPrefixMatch $prefixMatch = null,
		/** Level of sensitivity set for zscore rules. */
		public ?\FoundryCo\Cloudflare\Enums\MagicNetworkMonitoringRulesUpdateRuleRequestZscoreSensitivity $zscoreSensitivity = null,
		/** Target of the zscore rule analysis. */
		public ?\FoundryCo\Cloudflare\Enums\MagicNetworkMonitoringRulesUpdateRuleRequestZscoreTarget $zscoreTarget = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'automatic_advertisement' => $this->automaticAdvertisement,
		    'name' => $this->name,
		    'prefixes' => $this->prefixes,
		    'type' => $this->type->value,
		    'bandwidth_threshold' => $this->bandwidthThreshold,
		    'duration' => $this->duration?->value,
		    'packet_threshold' => $this->packetThreshold,
		    'prefix_match' => $this->prefixMatch?->value,
		    'zscore_sensitivity' => $this->zscoreSensitivity?->value,
		    'zscore_target' => $this->zscoreTarget?->value,
		], fn ($v) => $v !== null);
	}
}
