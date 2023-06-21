<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations')->insert([
            'title' => 'Customer# 123',
            // Conversation Title
            'channel_id' => 0,
            // For grouping different conversations in Conversations List
            'messages' => '{"messages":[{"message_type":0,"sender_id":2,"english_message":"I saw that they are recruiting for nose reshaping monitors. Is the payment for the Nose Shadow Rhinoplasty done in a lump sum?","japanese_message":"鼻整形モニターを募集しているのをみました。ノーズシャドウ隆鼻術の金額は一括払いになりますか?","created_at":"2010-01-03 04:30:43","deleted_at":null},{"message_type":0,"sender_id":1,"english_message":"Thank you for your inquiry. We accept payment in full.","japanese_message":"お問い合わせありがとうございます。一括払いでのお支払いを受け付けております。","created_at":"2010-01-03 04:31:43","deleted_at":null},{"message_type":0,"sender_id":2,"english_message":"Also, I would like to make a reservation for August 1st. What time slots are available?","japanese_message":"また、8月1日に予約したいのですが、時間は何時が可能ですか?","created_at":"2010-01-03 04:32:43","deleted_at":null},{"message_type":0,"sender_id":1,"english_message":"We can make an appointment for either 16:00 or 18:00 on August 1, 2012.","japanese_message":"2012年8月1日の予約には、16時または18時のどちらかの時間をご用意できます。","created_at":"2010-01-03 04:33:43","deleted_at":null},{"message_type":0,"sender_id":2,"english_message":"Is prior counseling or consultation necessary?","japanese_message":"事前にカウンセリングなどは必要でしょうか?","created_at":"2010-01-03 04:34:43","deleted_at":null},{"message_type":0,"sender_id":1,"english_message":"The pre-counseling will be held at the beginning of the above time, and after you agree to the precautions, the treatment will be performed as it is.","japanese_message":"上記の時間の始めに事前カウンセリングを行い、注意事項に同意いただいた後、治療を行います。","created_at":"2010-01-03 04:35:43","deleted_at":null}]}',
            'created_at' => '2010-01-03 04:30:43',
            'updated_at' => '2010-01-03 04:30:43',
            'deleted_at' => null,
        ]);
    }
}