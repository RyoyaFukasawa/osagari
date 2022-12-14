<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstSpecializedSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_specialized_subjects')->truncate();

        DB::table('mst_specialized_subjects')->insert([
            0 => [
                'id' => 1,
                'name' => '経営入門A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            1 => [
                'id' => 2,
                'name' => '経営入門B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            2 => [
                'id' => 3,
                'name' => '会計入門A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            3 => [
                'id' => 4,
                'name' => '会計入門B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            4 => [
                'id' => 5,
                'name' => '経済入門',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            5 => [
                'id' => 6,
                'name' => 'マーケティング入門A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            6 => [
                'id' => 7,
                'name' => 'マーケティング入門B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            7 => [
                'id' => 8,
                'name' => '情報処理入門',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            8 => [
                'id' => 9,
                'name' => '情報システム入門',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            9 => [
                'id' => 10,
                'name' => '統計入門',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            10 => [
                'id' => 11,
                'name' => '経営管理総論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            11 => [
                'id' => 12,
                'name' => '経営管理総論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            12 => [
                'id' => 13,
                'name' => '簿記基礎演習',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            13 => [
                'id' => 14,
                'name' => '論理基礎演習',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            14 => [
                'id' => 15,
                'name' => '情報リテラシ基礎演習',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            15 => [
                'id' => 16,
                'name' => 'グローバル基礎演習',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            16 => [
                'id' => 17,
                'name' => '経営数学基礎演習（線形代数A）',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            17 => [
                'id' => 18,
                'name' => '経営数学基礎演習（線形代数B）',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            18 => [
                'id' => 19,
                'name' => '経営数学基礎演習（微分積分A）',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            19 => [
                'id' => 20,
                'name' => '経営数学基礎演習（微分積分B）',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            20 => [
                'id' => 21,
                'name' => 'ビジネスデザイン基礎演習A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            21 => [
                'id' => 22,
                'name' => 'ビジネスデザイン基礎演習B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            22 => [
                'id' => 23,
                'name' => '調査の基本',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            23 => [
                'id' => 24,
                'name' => '経営データ解析演習',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            24 => [
                'id' => 25,
                'name' => 'インターンシップ基礎・インターンシップ',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            25 => [
                'id' => 26,
                'name' => 'ビジネス研究A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            26 => [
                'id' => 27,
                'name' => 'ビジネス研究B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            27 => [
                'id' => 28,
                'name' => 'ビジネス研究C',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            28 => [
                'id' => 29,
                'name' => 'ビジネス研究D',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            29 => [
                'id' => 30,
                'name' => 'ビジネス研究MA',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            30 => [
                'id' => 31,
                'name' => 'ビジネス研究BD',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            31 => [
                'id' => 32,
                'name' => '社会課題発見・解決演習',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            32 => [
                'id' => 33,
                'name' => '商業簿記応用演習',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            33 => [
                'id' => 34,
                'name' => '工業簿記応用演習',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            34 => [
                'id' => 35,
                'name' => 'グローバルリテラシ演習',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            35 => [
                'id' => 36,
                'name' => 'ゼミナールA',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            36 => [
                'id' => 37,
                'name' => 'ゼミナールB',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            37 => [
                'id' => 38,
                'name' => '卒業論文',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            38 => [
                'id' => 39,
                'name' => 'マクロ経済学',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            39 => [
                'id' => 40,
                'name' => 'ミクロ経済学',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            40 => [
                'id' => 41,
                'name' => '民法A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            41 => [
                'id' => 42,
                'name' => '民法B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            42 => [
                'id' => 43,
                'name' => '経営倫理',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            43 => [
                'id' => 44,
                'name' => 'コーポレート・ガバナンス',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            44 => [
                'id' => 45,
                'name' => '景気と政策',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            45 => [
                'id' => 46,
                'name' => '環境経営論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            46 => [
                'id' => 47,
                'name' => '経営学史',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            47 => [
                'id' => 48,
                'name' => '会社法A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            48 => [
                'id' => 49,
                'name' => '会社法B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            49 => [
                'id' => 50,
                'name' => '経済法A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            50 => [
                'id' => 51,
                'name' => '経済法B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            51 => [
                'id' => 52,
                'name' => 'ベンチャー・ビジネス論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            52 => [
                'id' => 53,
                'name' => '日本経営史A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            53 => [
                'id' => 54,
                'name' => '日本経営史B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            54 => [
                'id' => 55,
                'name' => '企業家論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            55 => [
                'id' => 56,
                'name' => 'グローカルイノベーション',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            56 => [
                'id' => 57,
                'name' => '事業継承論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            57 => [
                'id' => 58,
                'name' => 'ベンチャー企業経営論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            58 => [
                'id' => 59,
                'name' => '事業創造',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            59 => [
                'id' => 60,
                'name' => '流通論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            60 => [
                'id' => 61,
                'name' => '流通論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            61 => [
                'id' => 62,
                'name' => 'マーケティング・マネジメント',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            62 => [
                'id' => 63,
                'name' => 'マーケティング・リサーチ',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            63 => [
                'id' => 64,
                'name' => '製品開発論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            64 => [
                'id' => 65,
                'name' => '消費者行動論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            65 => [
                'id' => 66,
                'name' => '消費者行動論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            66 => [
                'id' => 67,
                'name' => 'ブランド論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            67 => [
                'id' => 68,
                'name' => '広告論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            68 => [
                'id' => 69,
                'name' => 'マーケティングコミュニケーション',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            69 => [
                'id' => 70,
                'name' => 'ビジネス・マーケティング',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            70 => [
                'id' => 71,
                'name' => 'サービス・マーケティング',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            71 => [
                'id' => 72,
                'name' => 'ビジネスデザイン特講',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            72 => [
                'id' => 73,
                'name' => '研究開発とイノベーションA',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            73 => [
                'id' => 74,
                'name' => '研究開発とイノベーションB',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            74 => [
                'id' => 75,
                'name' => '応用経済学',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            75 => [
                'id' => 76,
                'name' => 'マーケティング戦略論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            76 => [
                'id' => 77,
                'name' => 'マーケティング戦略論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            77 => [
                'id' => 78,
                'name' => '国際ビジネス概論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            78 => [
                'id' => 79,
                'name' => '日本経済論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            79 => [
                'id' => 80,
                'name' => '日本経済論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            80 => [
                'id' => 81,
                'name' => '地域研究',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            81 => [
                'id' => 82,
                'name' => '中期留学プログラムA',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            82 => [
                'id' => 83,
                'name' => '中期留学プログラムB',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            83 => [
                'id' => 84,
                'name' => 'ファイナンスの基礎',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            84 => [
                'id' => 85,
                'name' => '経営分析',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            85 => [
                'id' => 86,
                'name' => '金融論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            86 => [
                'id' => 87,
                'name' => '金融論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            87 => [
                'id' => 88,
                'name' => '商業簿記論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            88 => [
                'id' => 89,
                'name' => '商業簿記論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            89 => [
                'id' => 90,
                'name' => '工業簿記論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            90 => [
                'id' => 91,
                'name' => '組織行動論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            91 => [
                'id' => 92,
                'name' => '経営学とキャリア開発',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            92 => [
                'id' => 93,
                'name' => '経営情報論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            93 => [
                'id' => 94,
                'name' => '経営情報論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            94 => [
                'id' => 95,
                'name' => 'オペレーションズ・リサーチA',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            95 => [
                'id' => 96,
                'name' => 'オペレーションズ・リサーチB',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            96 => [
                'id' => 97,
                'name' => '情報システムの分析',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            97 => [
                'id' => 98,
                'name' => '情報システム基礎',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            98 => [
                'id' => 99,
                'name' => '情報管理概論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            99 => [
                'id' => 100,
                'name' => '情報管理概論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            100 => [
                'id' => 101,
                'name' => 'プログラミング基礎',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            101 => [
                'id' => 102,
                'name' => '企業経済学',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            102 => [
                'id' => 103,
                'name' => '産業組織論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            103 => [
                'id' => 104,
                'name' => '新興市場ビジネス論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            104 => [
                'id' => 105,
                'name' => '国際経営論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            105 => [
                'id' => 106,
                'name' => 'ビジネス英語',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            106 => [
                'id' => 107,
                'name' => '異文化コミュニケーション',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            107 => [
                'id' => 108,
                'name' => 'ファイナンスと統計',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            108 => [
                'id' => 109,
                'name' => '財務管理論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            109 => [
                'id' => 110,
                'name' => '財務管理論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            110 => [
                'id' => 111,
                'name' => '証券論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            111 => [
                'id' => 112,
                'name' => '企業法と会計情報',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            112 => [
                'id' => 113,
                'name' => '原価計算',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            113 => [
                'id' => 114,
                'name' => '管理会計',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            114 => [
                'id' => 115,
                'name' => '税金の基礎',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            115 => [
                'id' => 116,
                'name' => 'リーダーシップ論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            116 => [
                'id' => 117,
                'name' => '雇用関係法',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            117 => [
                'id' => 118,
                'name' => '情報システムの開発',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            118 => [
                'id' => 119,
                'name' => 'プログラミング応用',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            119 => [
                'id' => 120,
                'name' => 'データベース論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            120 => [
                'id' => 121,
                'name' => 'シミュレーション論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            121 => [
                'id' => 122,
                'name' => '情報セキュリティ',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            122 => [
                'id' => 123,
                'name' => '経営組織論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            123 => [
                'id' => 124,
                'name' => '戦略経営論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            124 => [
                'id' => 125,
                'name' => '外国経営史A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            125 => [
                'id' => 126,
                'name' => '外国経営史B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            126 => [
                'id' => 127,
                'name' => '国際経済論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            127 => [
                'id' => 128,
                'name' => 'リスク・マネジメント論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            128 => [
                'id' => 129,
                'name' => '財務諸表論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            129 => [
                'id' => 130,
                'name' => 'コスト・マネジメント',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            130 => [
                'id' => 131,
                'name' => '監査論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            131 => [
                'id' => 132,
                'name' => '税務会計論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            132 => [
                'id' => 133,
                'name' => '連結会計',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            133 => [
                'id' => 134,
                'name' => '人的資源管理論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            134 => [
                'id' => 135,
                'name' => '人的資源管理論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            135 => [
                'id' => 136,
                'name' => '労使関係法',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            136 => [
                'id' => 137,
                'name' => '経営戦略論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            137 => [
                'id' => 138,
                'name' => '経営システム論',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            138 => [
                'id' => 139,
                'name' => '生産管理論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            139 => [
                'id' => 140,
                'name' => '生産管理論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            140 => [
                'id' => 141,
                'name' => '会計システムとソリューションA',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            141 => [
                'id' => 142,
                'name' => '会計システムとソリューションB',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            142 => [
                'id' => 143,
                'name' => 'マーケティングとソリューションA',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            143 => [
                'id' => 144,
                'name' => 'マーケティングとソリューションB',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            144 => [
                'id' => 145,
                'name' => 'Webプログラミング',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            145 => [
                'id' => 146,
                'name' => 'マルチメディア情報処理論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            146 => [
                'id' => 147,
                'name' => 'マルチメディア情報処理論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            147 => [
                'id' => 148,
                'name' => '情報通信ネットワーク論A',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            148 => [
                'id' => 149,
                'name' => '情報通信ネットワーク論B',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            149 => [
                'id' => 150,
                'name' => '経営学特講',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            150 => [
                'id' => 151,
                'name' => 'リーダーシップ開発プログラム',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            151 => [
                'id' => 152,
                'name' => '寄付講座',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            152 => [
                'id' => 153,
                'name' => '特殊講義',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
        ]);
    }
}
