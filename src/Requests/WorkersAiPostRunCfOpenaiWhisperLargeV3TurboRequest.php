<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/openai/whisper-large-v3-turbo model.
 */
readonly class WorkersAiPostRunCfOpenaiWhisperLargeV3TurboRequest
{
	public function __construct(
		public mixed $audio,
		/** The number of beams to use in beam search decoding. Higher values may improve accuracy at the cost of speed. */
		public ?int $beamSize = null,
		/** Threshold for filtering out segments with high compression ratio, which often indicate repetitive or hallucinated text. */
		public ?float $compressionRatioThreshold = null,
		/** Whether to condition on previous text during transcription. Setting to false may help prevent hallucination loops. */
		public ?bool $conditionOnPreviousText = null,
		/** Optional threshold (in seconds) to skip silent periods that may cause hallucinations. */
		public ?float $hallucinationSilenceThreshold = null,
		/** A text prompt to help provide context to the model on the contents of the audio. */
		public ?string $initialPrompt = null,
		/** The language of the audio being transcribed or translated. */
		public ?string $language = null,
		/** Threshold for filtering out segments with low average log probability, indicating low confidence. */
		public ?float $logProbThreshold = null,
		/** Threshold for detecting no-speech segments. Segments with no-speech probability above this value are skipped. */
		public ?float $noSpeechThreshold = null,
		/** The prefix appended to the beginning of the output of the transcription and can guide the transcription result. */
		public ?string $prefix = null,
		/** Supported tasks are 'translate' or 'transcribe'. */
		public ?string $task = null,
		/** Preprocess the audio with a voice activity detection model. */
		public ?bool $vadFilter = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'audio' => $this->audio,
		    'beam_size' => $this->beamSize,
		    'compression_ratio_threshold' => $this->compressionRatioThreshold,
		    'condition_on_previous_text' => $this->conditionOnPreviousText,
		    'hallucination_silence_threshold' => $this->hallucinationSilenceThreshold,
		    'initial_prompt' => $this->initialPrompt,
		    'language' => $this->language,
		    'log_prob_threshold' => $this->logProbThreshold,
		    'no_speech_threshold' => $this->noSpeechThreshold,
		    'prefix' => $this->prefix,
		    'task' => $this->task,
		    'vad_filter' => $this->vadFilter,
		], fn ($v) => $v !== null);
	}
}
