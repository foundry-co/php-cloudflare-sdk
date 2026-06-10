<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/deepgram/nova-3 model.
 */
readonly class WorkersAiPostRunCfDeepgramNova3Request
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\WorkersAiPostRunCfDeepgramNova3RequestAudio $audio,
		/** The number of channels in the submitted audio */
		public ?float $channels = null,
		/** Custom intents you want the model to detect within your input audio if present */
		public ?string $customIntent = null,
		/** Sets how the model will interpret intents submitted to the custom_intent param. When strict, the model will only return intents submitted using the custom_intent param. When extended, the model will return its own detected intents in addition those submitted using the custom_intents param */
		public ?\FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfDeepgramNova3RequestCustomIntentMode $customIntentMode = null,
		/** Custom topics you want the model to detect within your input audio or text if present Submit up to 100 */
		public ?string $customTopic = null,
		/** Sets how the model will interpret strings submitted to the custom_topic param. When strict, the model will only return topics submitted using the custom_topic param. When extended, the model will return its own detected topics in addition to those submitted using the custom_topic param. */
		public ?\FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfDeepgramNova3RequestCustomTopicMode $customTopicMode = null,
		/** Identifies and extracts key entities from content in submitted audio */
		public ?bool $detectEntities = null,
		/** Identifies the dominant language spoken in submitted audio */
		public ?bool $detectLanguage = null,
		/** Recognize speaker changes. Each word in the transcript will be assigned a speaker number starting at 0 */
		public ?bool $diarize = null,
		/** Identify and extract key entities from content in submitted audio */
		public ?bool $dictation = null,
		/** Specify the expected encoding of your submitted audio */
		public ?\FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfDeepgramNova3RequestEncoding $encoding = null,
		/** Indicates how long model will wait to detect whether a speaker has finished speaking or pauses for a significant period of time. When set to a value, the streaming endpoint immediately finalizes the transcription for the processed time range and returns the transcript with a speech_final parameter set to true. Can also be set to false to disable endpointing */
		public ?string $endpointing = null,
		/** Arbitrary key-value pairs that are attached to the API response for usage in downstream processing */
		public ?string $extra = null,
		/** Filler Words can help transcribe interruptions in your audio, like 'uh' and 'um' */
		public ?bool $fillerWords = null,
		/** Specifies whether the streaming endpoint should provide ongoing transcription updates as more audio is received. When set to true, the endpoint sends continuous updates, meaning transcription results may evolve over time. Note: Supported only for webosockets. */
		public ?bool $interimResults = null,
		/** Key term prompting can boost or suppress specialized terminology and brands. */
		public ?string $keyterm = null,
		/** Keywords can boost or suppress specialized terminology and brands. */
		public ?string $keywords = null,
		/** The BCP-47 language tag that hints at the primary spoken language. Depending on the Model and API endpoint you choose only certain languages are available. */
		public ?string $language = null,
		/** Spoken measurements will be converted to their corresponding abbreviations. */
		public ?bool $measurements = null,
		/** Opts out requests from the Deepgram Model Improvement Program. Refer to our Docs for pricing impacts before setting this to true. https://dpgr.am/deepgram-mip. */
		public ?bool $mipOptOut = null,
		/** Mode of operation for the model representing broad area of topic that will be talked about in the supplied audio */
		public ?\FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfDeepgramNova3RequestMode $mode = null,
		/** Transcribe each audio channel independently. */
		public ?bool $multichannel = null,
		/** Numerals converts numbers from written format to numerical format. */
		public ?bool $numerals = null,
		/** Splits audio into paragraphs to improve transcript readability. */
		public ?bool $paragraphs = null,
		/** Profanity Filter looks for recognized profanity and converts it to the nearest recognized non-profane word or removes it from the transcript completely. */
		public ?bool $profanityFilter = null,
		/** Add punctuation and capitalization to the transcript. */
		public ?bool $punctuate = null,
		/** Redaction removes sensitive information from your transcripts. */
		public ?string $redact = null,
		/** Search for terms or phrases in submitted audio and replaces them. */
		public ?string $replace = null,
		/** Search for terms or phrases in submitted audio. */
		public ?string $search = null,
		/** Recognizes the sentiment throughout a transcript or text. */
		public ?bool $sentiment = null,
		/** Apply formatting to transcript output. When set to true, additional formatting will be applied to transcripts to improve readability. */
		public ?bool $smartFormat = null,
		/** Detect topics throughout a transcript or text. */
		public ?bool $topics = null,
		/** Seconds to wait before detecting a pause between words in submitted audio. */
		public ?float $uttSplit = null,
		/** Indicates how long model will wait to send an UtteranceEnd message after a word has been transcribed. Use with interim_results. Note: Supported only for webosockets. */
		public ?bool $utteranceEndMs = null,
		/** Segments speech into meaningful semantic units. */
		public ?bool $utterances = null,
		/** Indicates that speech has started. You'll begin receiving Speech Started messages upon speech starting. Note: Supported only for webosockets. */
		public ?bool $vadEvents = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'audio' => $this->audio->toArray(),
		    'channels' => $this->channels,
		    'custom_intent' => $this->customIntent,
		    'custom_intent_mode' => $this->customIntentMode?->value,
		    'custom_topic' => $this->customTopic,
		    'custom_topic_mode' => $this->customTopicMode?->value,
		    'detect_entities' => $this->detectEntities,
		    'detect_language' => $this->detectLanguage,
		    'diarize' => $this->diarize,
		    'dictation' => $this->dictation,
		    'encoding' => $this->encoding?->value,
		    'endpointing' => $this->endpointing,
		    'extra' => $this->extra,
		    'filler_words' => $this->fillerWords,
		    'interim_results' => $this->interimResults,
		    'keyterm' => $this->keyterm,
		    'keywords' => $this->keywords,
		    'language' => $this->language,
		    'measurements' => $this->measurements,
		    'mip_opt_out' => $this->mipOptOut,
		    'mode' => $this->mode?->value,
		    'multichannel' => $this->multichannel,
		    'numerals' => $this->numerals,
		    'paragraphs' => $this->paragraphs,
		    'profanity_filter' => $this->profanityFilter,
		    'punctuate' => $this->punctuate,
		    'redact' => $this->redact,
		    'replace' => $this->replace,
		    'search' => $this->search,
		    'sentiment' => $this->sentiment,
		    'smart_format' => $this->smartFormat,
		    'topics' => $this->topics,
		    'utt_split' => $this->uttSplit,
		    'utterance_end_ms' => $this->utteranceEndMs,
		    'utterances' => $this->utterances,
		    'vad_events' => $this->vadEvents,
		], fn ($v) => $v !== null);
	}
}
