<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Logpush job
 */
readonly class PutZonesZoneIdLogpushJobsJobIdRequest
{
	public function __construct(
		/** Uniquely identifies a resource (such as an s3 bucket) where data. will be pushed. Additional configuration parameters supported by the destination may be included. */
		public ?string $destinationConf = null,
		/** Flag that indicates if the job is enabled. */
		public ?bool $enabled = null,
		/** The filters to select the events to include and/or remove from your logs. For more information, refer to [Filters](https://developers.cloudflare.com/logs/reference/filters/). */
		public ?string $filter = null,
		/** This field is deprecated. Please use `max_upload_*` parameters instead. . The frequency at which Cloudflare sends batches of logs to your destination. Setting frequency to high sends your logs in larger quantities of smaller files. Setting frequency to low sends logs in smaller quantities of larger files. */
		public ?\FoundryCo\Cloudflare\Enums\PutZonesZoneIdLogpushJobsJobIdRequestFrequency $frequency = null,
		/** The kind parameter (optional) is used to differentiate between Logpush and Edge Log Delivery jobs (when supported by the dataset). */
		public ?\FoundryCo\Cloudflare\Enums\PutZonesZoneIdLogpushJobsJobIdRequestKind $kind = null,
		/** This field is deprecated. Use `output_options` instead. Configuration string. It specifies things like requested fields and timestamp formats. If migrating from the logpull api, copy the url (full url or just the query string) of your call here, and logpush will keep on making this call for you, setting start and end times appropriately. */
		public ?string $logpullOptions = null,
		/** The maximum uncompressed file size of a batch of logs. This setting value must be between `5 MB` and `1 GB`, or `0` to disable it. Note that you cannot set a minimum file size; this means that log files may be much smaller than this batch size. */
		public mixed $maxUploadBytes = null,
		/** The maximum interval in seconds for log batches. This setting must be between 30 and 300 seconds (5 minutes), or `0` to disable it. Note that you cannot specify a minimum interval for log batches; this means that log files may be sent in shorter intervals than this. */
		public mixed $maxUploadIntervalSeconds = null,
		/** The maximum number of log lines per batch. This setting must be between 1000 and 1,000,000 lines, or `0` to disable it. Note that you cannot specify a minimum number of log lines per batch; this means that log files may contain many fewer lines than this. */
		public mixed $maxUploadRecords = null,
		/** Optional human readable job name. Not unique. Cloudflare suggests. that you set this to a meaningful string, like the domain name, to make it easier to identify your job. */
		public ?string $name = null,
		/** The structured replacement for `logpull_options`. When including this field, the `logpull_option` field will be ignored. */
		public ?\FoundryCo\Cloudflare\Responses\PutZonesZoneIdLogpushJobsJobIdRequestOutputOptions $outputOptions = null,
		/** Ownership challenge token to prove destination ownership. */
		public ?string $ownershipChallenge = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'destination_conf' => $this->destinationConf,
		    'enabled' => $this->enabled,
		    'filter' => $this->filter,
		    'frequency' => $this->frequency?->value,
		    'kind' => $this->kind?->value,
		    'logpull_options' => $this->logpullOptions,
		    'max_upload_bytes' => $this->maxUploadBytes,
		    'max_upload_interval_seconds' => $this->maxUploadIntervalSeconds,
		    'max_upload_records' => $this->maxUploadRecords,
		    'name' => $this->name,
		    'output_options' => $this->outputOptions?->toArray(),
		    'ownership_challenge' => $this->ownershipChallenge,
		], fn ($v) => $v !== null);
	}
}
