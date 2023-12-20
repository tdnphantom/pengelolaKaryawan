<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai_datas', function (Blueprint $table) {
            $table->id();
            $table->integer('nik_admedika');
            $table->integer('nik_tg');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', [
                'Islam',
                'Kristen',
                'Katolik',
                'Hindu',
                'Buddha',
                'Konghucu'
            ])->default('Islam');
            $table->string('kota_lahir');
            $table->dateTime('tanggal_lahir');
            $table->integer('tahun_lahir');
            $table->bigInteger('no_ktp');

            $table->text('alamat_ktp');
            $table->text('kab_kota_ktp');
            $table->text('provinsi_ktp');
            $table->string('kodepos_ktp');
            $table->text('alamat_domisili');
            $table->text('kab_kota_domisili');
            $table->text('provinsi_domisili');
            $table->string('kodepos_domisili');

            $table->enum('status_pernikahan', [
                'Belum Menikah',
                'Menikah',
                'Cerai Hidup',
                'Cerai Mati'
            ]);
            $table->dateTime('tanggal_pernikahan')->nullable();
            $table->integer('jumlah_anak')->nullable();
            $table->enum('pendidikan_terakhir', [
                'Tidak Sekolah',
                'SD/Sederajat',
                'SMP/Sederajat',
                'SMA/Sederajat',
                'D3',
                'D4/S1',
                'S2',
                'S3'
            ]);
            $table->text('jurusan_pendidikan_terakhir');
            $table->text('nama_institusi');
            $table->text('kota_institusi');
            $table->year('lulus_thn_pendidikan_terakhir');

            $table->string('email_pribadi');
            $table->char('no_hp_tsel');
            $table->char('no_hp_nontsel');
            $table->char('no_hp_emergency');
            $table->text('nama_kontak_emergency');
            $table->text('hubungan_kontak_emergency');
            $table->text('nama_ibu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai_datas');
    }
};
