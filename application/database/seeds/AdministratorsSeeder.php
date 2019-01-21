<?php

class AdministratorsSeeder extends Seeder {

    private $table = 'administrators';

    public function run() {
        $this->db->truncate($this->table);
        
        //seed records manually
        echo "seeding  ".$this->table;

        $data = [
            'vName' => 'admin',
            'vEmail' => 'admin@gmail.com',
            'vPassword' => 'DShjDShj',
            'dtCreatedDateTime' => date('Y-m-d H:i:s'),
        ];
        $data1 = [
            'vName' => 'Jeniffer Raffel',
            'vEmail' => 'jeniffer.raffel@gmail.com',
            'vPassword' => 'DShjDShj',
            'dtCreatedDateTime' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert($this->table, $data);
        $this->db->insert($this->table, $data1);

        echo PHP_EOL;
    }
}
