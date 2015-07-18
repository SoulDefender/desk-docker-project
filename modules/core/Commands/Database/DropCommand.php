<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 10.07.15
 * Time: 17:51
 */

namespace Desk\Core\Commands\Database;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DropCommand extends Command{

    protected $app;

    /**
     * @param \Pimple $app
     */
    public function __construct(\Pimple $app)
    {
        parent::__construct();
        $this->app = $app;
    }

    protected function configure()
    {
        $this->setName('database:drop')
            ->setDescription('Drop database. Database name defined in database.env');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $dbName = getenv('DB_NAME');
            $lineChanged = $this->app['database.connection']->exec("DROP DATABASE $dbName");
            if ($lineChanged === false) {
                $output->writeln($this->app['database.connection']->errorInfo()[2]);
            } else {
                $output->writeln("Database $dbName dropped");
            }
        } catch (\PDOException $ex) {
            $output->writeln($ex->getMessage());
        }
    }
}