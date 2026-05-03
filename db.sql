CREATE TABLE jurnal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul_jurnal VARCHAR(255) NOT NULL,
    penulis VARCHAR(150) NOT NULL,
    tahun_terbit INT(4) NOT NULL,
    link_referensi VARCHAR(255),
    status_baca ENUM('Belum Dibaca', 'Sedang Direview', 'Selesai') DEFAULT 'Belum Dibaca',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);