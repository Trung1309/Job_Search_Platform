<?php

namespace App\Mail;

use App\Models\Bussiness;
use App\Models\Job;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class RejectedJob extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $job;

    public $company;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Job $job,Bussiness $company)
    {
        //
        $this->user = $user;
        $this->job = $job;
        $this->company = $company;

    }

    public function build()
    {

        return  $this->view('emails.rejected-job')
                    ->subject('Thông báo kết quả')
                    ->with([
                        'userName' => $this->user->ho_ten,
                        'jobName' => $this->job->ten_cong_viec,
                        // 'ngayPhongVan' => now()->addDays(7)->format('d-m-Y'), // ví dụ ngày phỏng vấn sau 7 ngày
                        'tenCongTy' => $this->company->ten_doanh_nghiep,
                    ]);
    }

}
