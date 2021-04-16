<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class RepeatString extends Command
{
    protected static $defaultName = 'repeat_string';

    protected function configure()
    {
        $this
          ->addArgument('string', InputArgument::REQUIRED, 'String')
        ;

        $this
          ->addOption(
            'repeat',
            null,
            InputOption::VALUE_OPTIONAL,
            'Repeat string output',
            1
          )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');

        $repeat = $input->getOption('repeat');

        for ($i=0; $i < $repeat; $i++) {
            $output->writeln($string);
        }

        return Command::SUCCESS;
    }
}
