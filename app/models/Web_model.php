<?php
class Web_model
{
    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        // data sour name
        $dsn = 'mysql:
        host=localhost;
        dbname=db_mvc';

        try {
            $this->dbh = new PDO($dsn,'root','');
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getAllWeb()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM web");
        $this->stmt->execute();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // private $web = [
    //     [
    //         "nama" => "Royandi",
    //         "jabatan" => "Frontend Developer",
    //         "pengalaman" => "1 tahun",
    //         "umur" => 21,
    //         "alamat" => "Jalan Perintis, Makassar",
    //         "kampus" => "Universitas Dipa Makassar",
    //         "asal_daerah" => "Sulawesi Barat, Mamuju"
    //     ],
    //     [
    //         "nama" => "Vani",
    //         "jabatan" => "Backend Developer",
    //         "pengalaman" => "3 tahun",
    //         "umur" => 26,
    //         "alamat" => "Jalan Sudirman, Jakarta",
    //         "kampus" => "Universitas Indonesia",
    //         "asal_daerah" => "Jakarta, Jakarta"
    //     ],
    //     [
    //         "nama" => "Putri",
    //         "jabatan" => "Frontend Developer",
    //         "pengalaman" => "3 tahun",
    //         "umur" => 24,
    //         "alamat" => "Jalan Gatot Subroto, Bandung",
    //         "kampus" => "Institut Teknologi Bandung",
    //         "asal_daerah" => "Jawa Barat, Bandung"
    //     ],
    //     [
    //         "nama" => "Gelln",
    //         "jabatan" => "Frontend Developer",
    //         "pengalaman" => "3 tahun",
    //         "umur" => 28,
    //         "alamat" => "Jalan Raya, Surabaya",
    //         "kampus" => "Universitas Airlangga",
    //         "asal_daerah" => "Jawa Timur, Surabaya"
    //     ],
    //     [
    //         "nama" => "Lina",
    //         "jabatan" => "UI/UX Designer",
    //         "pengalaman" => "2 tahun",
    //         "umur" => 22,
    //         "alamat" => "Jalan Merdeka, Yogyakarta",
    //         "kampus" => "Universitas Gadjah Mada",
    //         "asal_daerah" => "Yogyakarta, Yogyakarta"
    //     ],
    //     [
    //         "nama" => "Adi",
    //         "jabatan" => "Backend Developer",
    //         "pengalaman" => "4 tahun",
    //         "umur" => 29,
    //         "alamat" => "Jalan Pemuda, Semarang",
    //         "kampus" => "Universitas Diponegoro",
    //         "asal_daerah" => "Jawa Tengah, Semarang"
    //     ]
    // ];
   
}
