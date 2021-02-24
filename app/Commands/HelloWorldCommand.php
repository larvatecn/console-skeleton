<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace App\Commands;

/**
 * Hello World
 * @author Tongle Xu <xutongle@gmail.com>
 */

use Illuminate\Console\Command;

/**
 * HelloWorld Command
 * @author Tongle Xu <xutongle@gmail.com>
 */
class HelloWorldCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello:world';

    /**
     * The console command description.
     *
     * @var string|null
     */
    protected $description = 'This is a simple hello world';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->comment('Hello World');
    }
}
