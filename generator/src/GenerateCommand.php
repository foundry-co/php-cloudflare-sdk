<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('generate')
            ->setDescription('Generate the Cloudflare SDK from the OpenAPI spec')
            ->addOption('spec', 's', InputOption::VALUE_OPTIONAL, 'Path or URL to the OpenAPI spec (defaults to Cloudflare GitHub)')
            ->addOption('output', 'o', InputOption::VALUE_OPTIONAL, 'Output directory (defaults to src/)', 'src');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $specPath  = $input->getOption('spec');
        $outputDir = rtrim((string) $input->getOption('output'), '/');

        if (!is_dir($outputDir)) {
            $output->writeln("<error>Output directory does not exist: {$outputDir}</error>");
            return Command::FAILURE;
        }

        try {
            $generator = new Generator();
            $generator->run($outputDir, $specPath ?: null, $output);
            return Command::SUCCESS;
        } catch (\Throwable $e) {
            $output->writeln("<error>{$e->getMessage()}</error>");
            if ($output->isVerbose()) {
                $output->writeln($e->getTraceAsString());
            }
            return Command::FAILURE;
        }
    }
}
