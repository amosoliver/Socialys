<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Inserir dados na tabela congregacaos
        DB::table('congregacaos')->insert([
            ['nome' => 'União da Vitória 1', 'created_at' => '2024-02-10 22:18:28', 'updated_at' => '2024-02-10 22:18:28'],
            ['nome' => 'União da Vitória 2', 'created_at' => '2024-02-10 22:18:37', 'updated_at' => '2024-02-10 22:18:37'],
            ['nome' => 'União da Vitória 3', 'created_at' => '2024-02-10 22:18:46', 'updated_at' => '2024-02-10 22:18:46'],
            ['nome' => 'União da Vitória 4', 'created_at' => '2024-02-10 22:18:54', 'updated_at' => '2024-02-10 22:18:54'],
            ['nome' => 'União da Vitória 5', 'created_at' => '2024-02-10 22:19:02', 'updated_at' => '2024-02-10 22:19:02'],
            ['nome' => 'Aponiã 1', 'created_at' => '2024-02-10 22:19:14', 'updated_at' => '2024-02-10 22:19:14'],
            ['nome' => 'Aponiã 2', 'created_at' => '2024-02-10 22:19:21', 'updated_at' => '2024-02-10 22:19:21'],
            ['nome' => 'Aponiã 3', 'created_at' => '2024-02-10 22:19:27', 'updated_at' => '2024-02-10 22:19:27'],
            ['nome' => 'Ipanema', 'created_at' => '2024-02-10 22:19:38', 'updated_at' => '2024-02-10 22:19:38'],
        ]);

        // Inserir dados na tabela literaturas
        DB::table('literaturas')->insert([
            ['valor' => 778.63, 'id_congregacao' => 1, 'created_at' => '2024-02-10 22:20:57', 'updated_at' => '2024-02-10 22:20:57'],
            ['valor' => 551.54, 'id_congregacao' => 2, 'created_at' => '2024-02-10 22:21:16', 'updated_at' => '2024-02-10 22:21:16'],
            ['valor' => 584.85, 'id_congregacao' => 3, 'created_at' => '2024-02-10 22:21:42', 'updated_at' => '2024-02-10 22:21:42'],
            ['valor' => 62.73, 'id_congregacao' => 4, 'created_at' => '2024-02-10 22:22:04', 'updated_at' => '2024-02-10 22:22:04'],
            ['valor' => 168.97, 'id_congregacao' => 5, 'created_at' => '2024-02-10 22:22:21', 'updated_at' => '2024-02-10 22:22:21'],
            ['valor' => 280.00, 'id_congregacao' => 6, 'created_at' => '2024-02-10 22:22:50', 'updated_at' => '2024-02-10 22:22:50'],
            ['valor' => 314.43, 'id_congregacao' => 7, 'created_at' => '2024-02-10 22:23:10', 'updated_at' => '2024-02-10 22:23:10'],
            ['valor' => 393.41, 'id_congregacao' => 8, 'created_at' => '2024-02-10 22:23:30', 'updated_at' => '2024-02-10 22:23:30'],
            ['valor' => 41.90, 'id_congregacao' => 9, 'created_at' => '2024-02-10 22:40:49', 'updated_at' => '2024-02-10 22:40:49'],
        ]);

        // Inserir dados na tabela recibos
        DB::table('recibos')->insert([
            ['numero_recibo' => '75048', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-03', 'nome' => 'Dagmar Della Valentina', 'valor' => 220.00, 'created_at' => '2024-02-05 18:53:11', 'updated_at' => '2024-02-05 18:53:11'],
            ['numero_recibo' => '75049', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-03', 'nome' => 'Ana Paula Nascimento', 'valor' => 170.00, 'created_at' => '2024-02-05 18:53:56', 'updated_at' => '2024-02-05 18:53:56'],
            ['numero_recibo' => '75050', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-03', 'nome' => 'Dil Moreira da Rocha', 'valor' => 652.00, 'created_at' => '2024-02-05 18:54:53', 'updated_at' => '2024-02-05 18:54:53'],
            ['numero_recibo' => '86001', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-03', 'nome' => 'Maria Madalena Ataide', 'valor' => 250.00, 'created_at' => '2024-02-05 18:56:08', 'updated_at' => '2024-02-05 18:56:08'],
            ['numero_recibo' => '86002', 'id_congregacao' => 1, 'descricao' => 'Oferta', 'data' => '2024-02-03', 'nome' => 'Oferta ceia do Senhor', 'valor' => 252.45, 'created_at' => '2024-02-05 18:57:22', 'updated_at' => '2024-02-05 18:57:22'],
            ['numero_recibo' => '86003', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-03', 'nome' => 'Dirce Maria', 'valor' => 200.00, 'created_at' => '2024-02-05 18:58:32', 'updated_at' => '2024-02-05 18:58:32'],
            ['numero_recibo' => '86004', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-04', 'nome' => 'Avila Correia Freire', 'valor' => 10.00, 'created_at' => '2024-02-05 18:59:16', 'updated_at' => '2024-02-05 18:59:16'],
            ['numero_recibo' => '86005', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-04', 'nome' => 'Lourenço Doenha', 'valor' => 624.24, 'created_at' => '2024-02-05 19:00:21', 'updated_at' => '2024-02-05 19:00:21'],
            ['numero_recibo' => '86006', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-04', 'nome' => 'Eunice Tazawa Doenha', 'valor' => 738.09, 'created_at' => '2024-02-05 19:01:24', 'updated_at' => '2024-02-05 19:01:24'],
            ['numero_recibo' => '86007', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-04', 'nome' => 'Jucelio Luiz da Silva', 'valor' => 825.36, 'created_at' => '2024-02-05 19:02:18', 'updated_at' => '2024-02-05 19:02:18'],
            ['numero_recibo' => '86008', 'id_congregacao' => 1, 'descricao' => 'Oferta', 'data' => '2024-02-04', 'nome' => 'Oferta EBD', 'valor' => 40.00, 'created_at' => '2024-02-05 19:02:57', 'updated_at' => '2024-02-05 19:02:57'],
            ['numero_recibo' => '86009', 'id_congregacao' => 1, 'descricao' => 'Oferta', 'data' => '2024-02-04', 'nome' => 'Oferta Culto Domingo', 'valor' => 121.00, 'created_at' => '2024-02-05 19:03:52', 'updated_at' => '2024-02-05 19:03:52'],
            ['numero_recibo' => '86010', 'id_congregacao' => 1, 'descricao' => 'Oferta', 'data' => '2024-02-04', 'nome' => 'Oferta Culto Quinta', 'valor' => 52.80, 'created_at' => '2024-02-05 19:05:04', 'updated_at' => '2024-02-05 19:05:04'],
            ['numero_recibo' => '86011', 'id_congregacao' => 1, 'descricao' => 'Literatura', 'data' => '2024-02-04', 'nome' => 'Literatura União 1', 'valor' => 463.70, 'created_at' => '2024-02-05 19:05:56', 'updated_at' => '2024-02-05 19:05:56'],
            ['numero_recibo' => '75099', 'id_congregacao' => 7, 'descricao' => 'Literatura', 'data' => '2024-01-31', 'nome' => 'Literatura ap2', 'valor' => 179.00, 'created_at' => '2024-02-11 00:11:10', 'updated_at' => '2024-02-11 00:11:10'],
            ['numero_recibo' => '75098', 'id_congregacao' => 3, 'descricao' => 'Literatura', 'data' => '2024-01-31', 'nome' => 'Literatura União 3', 'valor' => 206.00, 'created_at' => '2024-02-11 00:15:35', 'updated_at' => '2024-02-11 00:15:35'],
            ['numero_recibo' => '75033', 'id_congregacao' => 5, 'descricao' => 'Literatura', 'data' => '2024-01-31', 'nome' => 'Literatura União 5', 'valor' => 170.00, 'created_at' => '2024-02-11 00:16:20', 'updated_at' => '2024-02-11 00:16:20'],
            ['numero_recibo' => '86012', 'id_congregacao' => 1, 'descricao' => 'Oferta', 'data' => '2024-02-06', 'nome' => 'Oferta Culto Terça', 'valor' => 43.70, 'created_at' => '2024-02-11 00:25:06', 'updated_at' => '2024-02-11 00:25:06'],
            ['numero_recibo' => '86013', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-06', 'nome' => 'Vanessa Souza Bentes', 'valor' => 160.00, 'created_at' => '2024-02-11 00:27:58', 'updated_at' => '2024-02-11 00:27:58'],
            ['numero_recibo' => '86014', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-08', 'nome' => 'Amiston Geremias', 'valor' => 800.00, 'created_at' => '2024-02-11 00:30:17', 'updated_at' => '2024-02-11 00:30:17'],
            ['numero_recibo' => '86015', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-08', 'nome' => 'Conceição Monteiro Saldanha', 'valor' => 300.00, 'created_at' => '2024-02-11 00:31:08', 'updated_at' => '2024-02-11 00:31:08'],
            ['numero_recibo' => '86015', 'id_congregacao' => 1, 'descricao' => 'Missão', 'data' => '2024-02-08', 'nome' => 'Conceição Monteiro Saldanha', 'valor' => 200.00, 'created_at' => '2024-02-11 00:32:12', 'updated_at' => '2024-02-11 00:32:12'],
            ['numero_recibo' => '86016', 'id_congregacao' => 1, 'descricao' => 'Oferta', 'data' => '2024-02-08', 'nome' => 'Oferta Culto Quinta', 'valor' => 58.35, 'created_at' => '2024-02-11 00:32:52', 'updated_at' => '2024-02-11 00:32:52'],
            ['numero_recibo' => '86017', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-08', 'nome' => 'Luzia Coutinho', 'valor' => 50.00, 'created_at' => '2024-02-11 00:33:27', 'updated_at' => '2024-02-11 00:33:27'],
            ['numero_recibo' => '86018', 'id_congregacao' => 1, 'descricao' => 'Dízimo', 'data' => '2024-02-08', 'nome' => 'Fabiana Xavier dos Santos', 'valor' => 1430.00, 'created_at' => '2024-02-11 00:34:14', 'updated_at' => '2024-02-11 00:34:14'],
            ['numero_recibo' => '86018', 'id_congregacao' => 1, 'descricao' => 'Missão', 'data' => '2024-02-08', 'nome' => 'Fabiana Xavier dos Santos', 'valor' => 100.00, 'created_at' => '2024-02-11 00:34:54', 'updated_at' => '2024-02-11 00:34:54'],
            ['numero_recibo' => '86019', 'id_congregacao' => 6, 'descricao' => 'Literatura', 'data' => '2024-02-08', 'nome' => 'Literatura ap1', 'valor' => 280.00, 'created_at' => '2024-02-11 00:35:28', 'updated_at' => '2024-02-11 00:35:28'],
            ['numero_recibo' => '86020', 'id_congregacao' => 7, 'descricao' => 'Literatura', 'data' => '2024-02-08', 'nome' => 'Literatura ap2', 'valor' => 135.43, 'created_at' => '2024-02-11 00:36:25', 'updated_at' => '2024-02-11 00:36:25'],
        ]);

        // Inserir dados na tabela recibo_saidas
        DB::table('recibo_saidas')->insert([
            ['nfc' => '844957', 'data' => '2024-02-04', 'nome' => 'gasolina', 'valor' => 100.00, 'created_at' => '2024-02-05 19:10:22', 'updated_at' => '2024-02-05 19:10:22'],
            ['nfc' => '875781', 'data' => '2024-02-04', 'nome' => 'gasolina', 'valor' => 50.00, 'created_at' => '2024-02-05 19:11:31', 'updated_at' => '2024-02-05 19:11:31'],
            ['nfc' => '317328', 'data' => '2024-02-04', 'nome' => 'Alcool Zulu', 'valor' => 86.20, 'created_at' => '2024-02-05 19:12:55', 'updated_at' => '2024-02-05 19:12:55'],
            ['nfc' => '285551', 'data' => '2024-02-04', 'nome' => 'Café EBD', 'valor' => 20.69, 'created_at' => '2024-02-05 19:13:40', 'updated_at' => '2024-02-05 19:13:40'],
        ]);
    }
}
