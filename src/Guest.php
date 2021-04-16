<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class Guest extends Command
{
    protected static $defaultName = 'app:guest';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $name = $io->ask('Введите ваше имя');
        $age = $io->ask('Введите ваш возраст');
        $sex = $io->choice('Выберите ваш пол', ['M', 'Ж']);

        $output->writeln('Здравствуйте, ' . $name . '. Ваш возраст: '. $age . '. Ваш пол: ' . $sex);

        return Command::SUCCESS;
    }
}
