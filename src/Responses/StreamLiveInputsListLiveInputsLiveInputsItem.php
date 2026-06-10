<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamLiveInputsListLiveInputsLiveInputsItem
{
	public function __construct(
		/** The date and time the live input was created. */
		public ?\DateTimeImmutable $created = null,
		/** Indicates the number of days after which the live inputs recordings will be deleted. When a stream completes and the recording is ready, the value is used to calculate a scheduled deletion date for that recording. Omit the field to indicate no change, or include with a `null` value to remove an existing scheduled deletion. */
		public ?float $deleteRecordingAfterDays = null,
		/** Indicates whether the live input is enabled and can accept streams. */
		public ?bool $enabled = null,
		/** A user modifiable key-value store used to reference other systems of record for managing live inputs. */
		public ?array $meta = null,
		/** The date and time the live input was last modified. */
		public ?\DateTimeImmutable $modified = null,
		/** A unique identifier for a live input. */
		public ?string $uid = null,
	) {
	}
}
