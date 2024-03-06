<?php

// app/controllers/Home.php

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';

        // Panggil model Home_model
        $homeModel = $this->model('Home_model');
        // Ambil semua produk
        $data['products'] = $homeModel->getAllProducts();

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
