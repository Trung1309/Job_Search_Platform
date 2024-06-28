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


class AcceptedJob extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $job;
    public $ngay;
    public $gio;
    public $sdt;
    public $company;
    public $so_duong;
    public $ward;
    public $district;
    public $province;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Job $job, $ngay, $gio,$sdt,Bussiness $company, $so_duong, $ward, $district, $province)
    {
        //
        $this->user = $user;
        $this->job = $job;
        $this->ngay = $ngay;
        $this->gio = $gio;
        $this->sdt = $sdt;
        $this->company = $company;
        $this->so_duong = $so_duong;
        $this->ward = $ward;
        $this->district = $district;
        $this->province = $province;
    }

    public function build()
    {

        return  $this->view('emails.accepted-job')
                    ->subject('Thông báo trúng tuyển')
                    ->with([
                        'userName' => $this->user->ho_ten,
                        'jobName' => $this->job->ten_cong_viec,
                        // 'ngayPhongVan' => now()->addDays(7)->format('d-m-Y'), // ví dụ ngày phỏng vấn sau 7 ngày
                        'ngayPhongVan' => $this->ngay,
                        'gioPhongVan' => $this->gio,
                        'soDienThoai' => $this->sdt,
                        'tenCongTy' => $this->company->ten_doanh_nghiep,
                        'soDuong' => $this->so_duong,
                        'phuongXa' => $this->ward,
                        'quanHuyen' => $this->district,
                        'tinhThanh' => $this->province,
                    ]);
    }

}
