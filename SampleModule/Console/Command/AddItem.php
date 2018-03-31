<?php
/**
 * Created by PhpStorm.
 * User: cattran
 * Date: 3/31/18
 * Time: 11:19 AM
 */

namespace Mastering\SampleModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Mastering\SampleModule\Model\ItemFactory;   // ItemFactory is a generated Factory class
use Magento\Framework\Console\Cli;


class AddItem extends Command {
    const INPUT_KEY_NAME = 'name';
    const INPUT_KEY_DESCRIPTION = 'description';

    private $itemFactory;

    public function __construct(ItemFactory $itemFactory) {
        $this->itemFactory = $itemFactory;
        parent::__construct();
    }

    protected function configure() {
        $this->setName('mastering:item:add')
            ->addArgument(self::INPUT_KEY_NAME, InputArgument::REQUIRED, 'Item name')
            ->addArgument(self::INPUT_KEY_DESCRIPTION, InputArgument::OPTIONAL, 'Item description');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        // create(), setName(), and setDescription() are magic methods of the generated ItemFactory class
        $item = $this->itemFactory->create();
        $item->setName($input->getArgument(self::INPUT_KEY_NAME));
        $item->setDescription($input->getArgument(self::INPUT_KEY_DESCRIPTION));
        $item->setIsObjectNew(true);
        $item->save();
        return Cli::RETURN_SUCCESS;
    }
}