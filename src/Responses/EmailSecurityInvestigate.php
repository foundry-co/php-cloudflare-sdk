<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityInvestigate
{
	public function __construct(
		/** Deprecated, use `GET /investigate/{investigate_id}/action_log` instead. End of life: November 1, 2026. */
		public ?array $actionLog = null,
		public ?array $clientRecipients = null,
		public ?array $detectionReasons = null,
		public mixed $id = null,
		public ?bool $isPhishSubmission = null,
		public ?bool $isQuarantined = null,
		/** The identifier of the message */
		public ?string $postfixId = null,
		/** Message processing properties */
		public ?EmailSecurityInvestigateProperties $properties = null,
		/** Deprecated, use `scanned_at` instead. End of life: November 1, 2026. */
		public ?string $ts = null,
		public ?string $alertId = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityInvestigateDeliveryMode $deliveryMode = null,
		public ?array $deliveryStatus = null,
		public ?string $edfHash = null,
		public ?string $envelopeFrom = null,
		public ?array $envelopeTo = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityInvestigateFinalDisposition $finalDisposition = null,
		/** Deprecated, use the `findings` field from `GET /investigate/{investigate_id}/detections` instead. End of life: November 1, 2026. Detection findings for this message. */
		public ?array $findings = null,
		public ?string $from = null,
		public ?string $fromName = null,
		public ?string $htmltextStructureHash = null,
		public ?string $messageId = null,
		/** Post-delivery operations performed on this message */
		public ?array $postDeliveryOperations = null,
		public ?string $postfixIdOutbound = null,
		public ?string $replyto = null,
		/** When the message was scanned (UTC) */
		public ?\DateTimeImmutable $scannedAt = null,
		/** When the message was sent (UTC) */
		public ?\DateTimeImmutable $sentAt = null,
		public ?string $sentDate = null,
		public ?string $smtpHeloServerIp = null,
		public ?string $smtpPreviousHopIp = null,
		public ?string $subject = null,
		public ?array $threatCategories = null,
		public ?array $to = null,
		public ?array $toName = null,
		public ?EmailSecurityInvestigateValidation $validation = null,
		public ?string $xOriginatingIp = null,
	) {
	}
}
