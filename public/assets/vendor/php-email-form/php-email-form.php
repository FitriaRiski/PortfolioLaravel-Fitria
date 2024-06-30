<?php
// Class untuk mengelola pengiriman email
class PHP_Email_Form {
    private $to;
    private $from_name;
    private $from_email;
    private $subject;
    private $message;
    private $headers;

    // $from_name = $_POST['name']; // Mendapatkan nama dari formulir
    // $from_email = $_POST['email']; // Mendapatkan email dari formulir
    
    
    //Konstruktor untuk menginisialisasi variabel
    public function __construct() {
        $this->to = 'fitriariski1945@gmail.com'; // Alamat email penerima
        $this->from_name = '$from_name'; // Nama pengirim
        $this->from_email = '$from_email'; // Alamat email pengirim
        $this->subject = 'Pesan dari Situs Web'; // Subjek email
        $this->message = 'Ini adalah pesan dari situs web...'; // Isi pesan email
        $this->headers = ''; // Header email
    }

    // Setter untuk mengatur alamat email penerima
    public function set_to($to) {
        $this->to = $to;
    }

    // Setter untuk mengatur nama pengirim
    public function set_from_name($from_name) {
        $this->from_name = $from_name;
    }

    // Setter untuk mengatur alamat email pengirim
    public function set_from_email($from_email) {
        $this->from_email = $from_email;
    }

    // Setter untuk mengatur subjek email
    public function set_subject($subject) {
        $this->subject = $subject;
    }

    // Setter untuk mengatur isi pesan email
    public function set_message($message) {
        $this->message = $message;
    }

    // Setter untuk mengatur header email
    private function set_headers() {
        $this->headers = "From: {$this->from_name} <{$this->from_email}>" . "\r\n";
        $this->headers .= "Reply-To: {$this->from_email}" . "\r\n";
        $this->headers .= "MIME-Version: 1.0" . "\r\n";
        $this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    }

    // Method untuk mengirim email
    public function send() {
        $this->set_headers();
        return mail($this->to, $this->subject, $this->message, $this->headers);
    }
}

// Inisialisasi objek dari class PHP_Email_Form
$contact = new PHP_Email_Form();

// Pengaturan detail email
$contact->set_to('alamat-email-penerima@example.com'); // Ganti dengan alamat email penerima yang sesuai
$contact->set_from_name($_POST['name']);
$contact->set_from_email($_POST['email']);
$contact->set_subject($_POST['subject']);
$contact->set_message($_POST['message']);

// Mengirim email dan menangani respons
if ($contact->send()) {
    echo json_encode(array('success' => 'Email berhasil dikirim.'));
} else {
    echo json_encode(array('error' => 'Email gagal dikirim.'));
}
?>
