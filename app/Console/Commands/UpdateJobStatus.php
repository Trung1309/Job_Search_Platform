<?php

namespace App\Console\Commands;

use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateJobStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cập nhật trạng thái công việc dựa trên ngày hết hạn';

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function __construct(){
        parent::__construct();
    }
    public function handle()
    {
        $job = Job::all();
        $now = Carbon::now();

        foreach ($job as $item) {
            if ($now->greaterThan($item->ngay_het_han)) {
                $item->trang_thai = 'Hết hạn';
            } else {
                $item->trang_thai = 'Đang hoạt động';
            }
            $item->save();
        }
        $this->info('Đã cập nhật trạng thái công việc thành công.');
    }
}
