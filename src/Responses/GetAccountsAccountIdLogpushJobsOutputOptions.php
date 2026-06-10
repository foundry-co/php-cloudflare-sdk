<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The structured replacement for `logpull_options`. When including this field, the `logpull_option` field will be ignored.
 */
readonly class GetAccountsAccountIdLogpushJobsOutputOptions
{
	public function __construct(
		/** If set to true, will cause all occurrences of `${` in the generated files to be replaced with `x{`. */
		public ?bool $cVE202144228 = null,
		/** String to be prepended before each batch. */
		public ?string $batchPrefix = null,
		/** String to be appended after each batch. */
		public ?string $batchSuffix = null,
		/** String to join fields. This field be ignored when `record_template` is set. */
		public ?string $fieldDelimiter = null,
		/** List of field names to be included in the Logpush output. For the moment, there is no option to add all fields at once, so you must specify all the fields names you are interested in. */
		public ?array $fieldNames = null,
		/** If set to true, subrequests will be merged into the parent request. Only supported for the `http_requests` dataset. */
		public ?bool $mergeSubrequests = null,
		/** Specifies the output type, such as `ndjson` or `csv`. This sets default values for the rest of the settings, depending on the chosen output type. Some formatting rules, like string quoting, are different between output types. */
		public ?\FoundryCo\Cloudflare\Enums\GetAccountsAccountIdLogpushJobsOutputOptionsOutputType $outputType = null,
		/** String to be inserted in-between the records as separator. */
		public ?string $recordDelimiter = null,
		/** String to be prepended before each record. */
		public ?string $recordPrefix = null,
		/** String to be appended after each record. */
		public ?string $recordSuffix = null,
		/** String to use as template for each record instead of the default json key value mapping. All fields used in the template must be present in `field_names` as well, otherwise they will end up as null. Format as a Go `text/template` without any standard functions, like conditionals, loops, sub-templates, etc. */
		public ?string $recordTemplate = null,
		/** Floating number to specify sampling rate. Sampling is applied on top of filtering, and regardless of the current `sample_interval` of the data. */
		public ?float $sampleRate = null,
		/** String to specify the format for timestamps, such as `unixnano`, `unix`, `rfc3339`, `rfc3339ms` or `rfc3339ns`. */
		public ?\FoundryCo\Cloudflare\Enums\GetAccountsAccountIdLogpushJobsOutputOptionsTimestampFormat $timestampFormat = null,
	) {
	}
}
