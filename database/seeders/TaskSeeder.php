<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * 動作確認用のダミーデータを登録する
     */
    public function run()
    {
        $names = [
            'お茶を買う',
            '洗濯物をたたむ',
            '課題を進める',
            '部屋を掃除する',
        ];

        foreach ($names as $name) {
            Task::create([
                'name'   => $name,
                'status' => false,
            ]);
        }

        Task::create([
            'name'   => 'ゴミを出す（完了済みの例）',
            'status' => true,
        ]);
    }
}
