<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class SayHello extends Command
{
    protected static $defaultName = 'say_hello';

    protected function configure()
    {
        $this
          ->addArgument('string', InputArgument::REQUIRED, 'String')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');

        $output->writeln('Привет ' . $string);

        return Command::SUCCESS;
    }
}
