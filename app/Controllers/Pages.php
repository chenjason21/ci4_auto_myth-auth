<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\CustomerModel;
use App\Models\JurnalPembelianModel;
use App\Models\JurnalPenjualanModel;
use App\Models\SalesModel;
use Myth\Auth\Models\UserModel;

class Pages extends BaseController
{
    protected $jurnalPembelian;
    protected $jurnalPenjualan;
    protected $barangModel;
    protected $salesModel;
    protected $customerModel;
    protected $userModel;
    public function __construct()
    {
        $this->jurnalPembelian = new JurnalPembelianModel();
        $this->jurnalPenjualan = new JurnalPenjualanModel();
        $this->customerModel = new CustomerModel();
        $this->salesModel = new SalesModel();
        $this->barangModel = new BarangModel();
    }
    // DASHBOARD
    public function index()
    {
        $total_barang = $this->barangModel->countAll('nama_barang');
        $total_sales = $this->salesModel->countAll('nama_sales');
        $total_customer = $this->customerModel->countAll('nama_customer');
        $total_jurnal_penjualan = $this->jurnalPenjualan->countAll('nama_customer');
        $total_jurnal_pembelian = $this->jurnalPembelian->countAll('nama_sales');

        $data = [
            'title' => 'Dashboard | Auto Part Admin',
            'menu' => 'dashboard',
            'submenu' => '',
            'total_barang' => $total_barang,
            'total_sales' => $total_sales,
            'total_customer' => $total_customer,
            'total_jurnal_pembelian' => $total_jurnal_pembelian,
            'total_jurnal_penjualan' => $total_jurnal_penjualan

        ];
        return view('pages/dashboard', $data);
    }




    // MANAJEMEN BARANG
    public function list_barang()
    {
        $data = [
            'barang' => $this->barangModel->getDetailBarang(),
            'title' => 'List Barang',
            'menu' => 'manajemen_barang',
            'submenu' => 'list_barang'
        ];
        return view('pages/list_barang', $data);
    }
    public function tambah_barang()
    {
        $data = [
            'sales' =>  $this->salesModel->getDetailSales(),
            'title' => 'Tambah Barang',
            'menu' => 'manajemen_barang',
            'submenu' => 'tambah_barang'
        ];
        return view('pages/tambah_barang', $data);
    }
    public function save_barang()
    {
        // dd($this->request->getVar());
        $this->barangModel->save([
            'jenis_mobil' => $this->request->getVar('jenis_mobil'),
            'merek_mobil' => $this->request->getVar('merek_mobil'),
            'no_part' => $this->request->getVar('no_part'),
            'jenis_barang' => $this->request->getVar('jenis_barang'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'harga_sales' => $this->request->getVar('harga_sales'),
            'harga_jual' => $this->request->getVar('harga_jual'),
            'nama_sales' => $this->request->getVar('nama_sales'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambah.');
        return redirect()->to('/tambah_barang');
    }

    public function detail_barang($id_barang)
    {
        $data = [
            'barang' => $barang = $this->barangModel->getDetailBarang($id_barang),
        ];

        return view('pages/detail_barang', $data);
    }
    public function delete_barang($id_barang)
    {

        $this->barangModel->delete($id_barang);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/list_barang');
    }
    public function edit_barang($id_barang)
    {
        $data = [
            'title' => 'Edit Barang',
            'barang' => $barang = $this->barangModel->getDetailBarang($id_barang),
            'sales' =>  $this->salesModel->getDetailSales(),

        ];
        return view('pages/edit_barang', $data);
        // session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        // return redirect()->to('/edit_sales');
    }

    public function update_barang($id_barang)
    {
        // dd($this->request->getVar());
        // echo $id_barang;
        $this->barangModel->save([

            'id_barang' => $id_barang,
            'jenis_mobil' => $this->request->getVar('jenis_mobil'),
            'merek_mobil' => $this->request->getVar('merek_mobil'),
            'no_part' => $this->request->getVar('no_part'),
            'jenis_barang' => $this->request->getVar('jenis_barang'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'harga_sales' => $this->request->getVar('harga_sales'),
            'harga_jual' => $this->request->getVar('harga_jual'),
            'nama_sales' => $this->request->getVar('nama_sales'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),


        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/list_barang');
    }
    // MANAJEMEN SALES
    public function list_sales()
    {
        $data = [
            'sales' => $sales = $this->salesModel->getDetailSales(),
            'title' => 'List Sales',
            'menu' => 'manajemen_sales',
            'submenu' => 'list_sales'
        ];
        return view('pages/list_sales', $data);
    }
    public function tambah_sales()
    {
        $data = [
            'title' => 'Tambah Sales',
            'menu' => 'manajemen_sales',
            'submenu' => 'tambah_sales'
        ];
        return view('pages/tambah_sales', $data);
    }

    public function save_sales()
    {

        $this->salesModel->save([
            'nama_sales' => $this->request->getVar('nama_sales'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat_sales' => $this->request->getVar('alamat_sales')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/tambah_sales');
    }
    public function delete_sales($id_sales)
    {

        $this->salesModel->delete($id_sales);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/list_sales');
    }
    public function edit_sales($id_sales)
    {
        $data = [
            'title' => 'Edit Sales',
            'sales' => $sales = $this->salesModel->getDetailSales($id_sales)
        ];
        return view('pages/edit_sales', $data);
    }

    public function update_sales($id_sales)
    {
        $this->salesModel->save([
            'id_sales' => $id_sales,
            'nama_sales' => $this->request->getVar('nama_sales'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat_sales' => $this->request->getVar('alamat_sales')

        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/list_sales');
    }

    // MANAJEMEN CUSTOMER
    public function list_customer()
    {
        $data = [
            'customer' =>  $customer = $this->customerModel->getCustomerDetail(),
            'title' => 'List Sales',
            'menu' => 'manajemen_customer',
            'submenu' => 'list_customer'
        ];
        return view('pages/list_customer', $data);
    }
    public function tambah_customer()
    {
        $data = [
            'title' => 'Tambah Customer',
            'menu' => 'manajemen_customer',
            'submenu' => 'tambah_customer'

        ];

        return view('pages/tambah_customer', $data);
    }
    public function save_customer()
    {

        $this->customerModel->save([
            'nama_customer' => $this->request->getVar('nama_customer'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat_customer' => $this->request->getVar('alamat_customer')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/tambah_customer');
    }
    public function delete_customer($id_customer)
    {

        $this->customerModel->delete($id_customer);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/list_customer');
    }
    public function edit_customer($id_customer)
    {

        $data = [
            'title' => 'Edit Customer',
            'customer' => $customer = $this->customerModel->getCustomerDetail($id_customer),
        ];
        return view('pages/edit_customer', $data);
        // session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        // return redirect()->to('/edit_sales');
    }

    public function update_customer($id_customer)
    {
        // dd($this->request->getVar());
        // echo $id_customer;
        $this->customerModel->save([
            'id_customer' => $id_customer,
            'nama_customer' => $this->request->getVar('nama_customer'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat_customer' => $this->request->getVar('alamat_customer')

        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/list_customer');
    }
    // MANAJEMEN JURNAL PENJUALAN
    public function list_jurnal_penjualan()
    {
        $this->jurnalPenjualan->orderBY('tanggal_penjualan', 'ASC');
        $data = [
            'jurnal_penjualan' => $jurnal_penjualan = $this->jurnalPenjualan->getDetailJurnalPenjualan(),
            'title' => 'List Jurnal Penjualan',
            'menu' => 'manajemen_jurnal',
            'submenu' => 'list_jurnal_penjualan'
        ];
        return view('pages/list_jurnal_penjualan', $data);
    }
    public function tambah_jurnal_penjualan()
    {
        $data = [
            'customer' =>  $customer = $this->customerModel->getCustomerDetail(),
            'title' => 'Tambah Jurnal Penjualan',
            'menu' => 'manajemen_jurnal',
            'submenu' => 'tambah_jurnal_penjualan'
        ];

        return view('pages/tambah_jurnal_penjualan', $data);
    }
    public function save_jurnal_penjualan()
    {

        $this->jurnalPenjualan->save([

            'tanggal_penjualan' => $this->request->getVar('tanggal_penjualan'),
            'nama_customer' => $this->request->getVar('nama_customer'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'harga_satuan' => $this->request->getVar('harga_satuan'),
            'total_penjualan' => $this->request->getVar('total_penjualan'),

        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/tambah_jurnal_penjualan');
    }
    public function delete_jurnal_penjualan($id_jurnal_penjualan)
    {

        $this->jurnalPenjualan->delete($id_jurnal_penjualan);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/list_jurnal_penjualan');
    }
    public function edit_jurnal_penjualan($id_jurnal_penjualan)
    {
        $customer = $this->customerModel->getCustomerDetail();
        $data = [
            'title' => 'Edit Jurnal Penjualan',
            'jurnal_penjualan' => $jurnal_penjualan = $this->jurnalPenjualan->getDetailJurnalPenjualan($id_jurnal_penjualan),
            'customer' => $customer

        ];
        return view('pages/edit_jurnal_penjualan', $data);
    }

    public function update_jurnal_penjualan($id_jurnal_penjualan)
    {
        // dd($this->request->getVar());
        // echo $id_jurnal_penjualan;
        $this->jurnalPenjualan->save([

            'id_jurnal_penjualan' => $id_jurnal_penjualan,
            'tanggal_penjualan' => $this->request->getVar('tanggal_penjualan'),
            'nama_customer' => $this->request->getVar('nama_customer'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'harga_satuan' => $this->request->getVar('harga_satuan'),
            'total_penjualan' => $this->request->getVar('total_penjualan')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/list_jurnal_penjualan');
    }
    public function cetak_jurnal_penjualan()
    {
        $this->jurnalPenjualan->orderBY('tanggal_penjualan', 'ASC');
        $tglawal = $this->request->getVar('tglawal');
        $tglakhir = $this->request->getVar('tglakhir');
        $nomor = 1;
        $dataLaporan = $this->jurnalPenjualan->printDetailJurnalPenjualan($tglawal, $tglakhir);
        // dd($this->request->getVar());
        $data = [
            'datalaporan' => $dataLaporan,
            'tglawal' => $tglawal,
            'tglakhir' => $tglakhir,
            'nomor' => $nomor,

        ];

        return view('pages/cetak_laporan_penjualan', $data);
    }

    // MANAJEMEN JURNAL PEMBELIAN
    public function list_jurnal_pembelian()
    {
        $this->jurnalPembelian->orderBY('tanggal_pembelian', 'ASC');
        $data = [
            'jurnal_pembelian' => $jurnal_pembelian = $this->jurnalPembelian->getDetailJurnalPembelian(),

            'title' => 'List Jurnal pembelian',
            'menu' => 'manajemen_jurnal',
            'submenu' => 'list_jurnal_pembelian'
        ];
        return view('pages/list_jurnal_pembelian', $data);
    }
    public function tambah_jurnal_pembelian()
    {
        $data = [
            'sales' =>  $this->salesModel->getDetailSales(),
            'title' => 'Tambah Jurnal Pembelian',
            'menu' => 'manajemen_jurnal',
            'submenu' => 'tambah_jurnal_pembelian'
        ];
        return view('pages/tambah_jurnal_pembelian', $data);
    }
    public function save_jurnal_pembelian()
    {
        // dd($this->request->getVar());
        $this->jurnalPembelian->save([
            'tanggal_pembelian' => $this->request->getVar('tanggal_pembelian'),
            'nama_sales' => $this->request->getVar('nama_sales'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'harga_satuan' => $this->request->getVar('harga_satuan'),
            'total_pembelian' => $this->request->getVar('total_pembelian')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/list_jurnal_pembelian');
    }
    public function delete_jurnal_pembelian($id_jurnal_pembelian)
    {

        $this->jurnalPembelian->delete($id_jurnal_pembelian);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/list_jurnal_pembelian');
    }
    public function edit_jurnal_pembelian($id_jurnal_pembelian)
    {
        $data = [
            'title' => 'Edit Jurnal pembelian',
            'jurnal_pembelian' => $jurnal_pembelian = $this->jurnalPembelian->getDetailJurnalPembelian($id_jurnal_pembelian),
            'sales' => $sales = $this->salesModel->getDetailSales(),

        ];
        return view('pages/edit_jurnal_pembelian', $data);
    }
    public function update_jurnal_pembelian($id_jurnal_pembelian)
    {
        $this->jurnalPembelian->save([
            'id_jurnal_pembelian' => $id_jurnal_pembelian,
            'tanggal_pembelian' => $this->request->getVar('tanggal_pembelian'),
            'nama_sales' => $this->request->getVar('nama_sales'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'harga_satuan' => $this->request->getVar('harga_satuan'),
            'total_pembelian' => $this->request->getVar('total_pembelian')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/list_jurnal_pembelian');
    }
    public function cetak_jurnal_pembelian()
    {
        $this->jurnalPembelian->orderBY('tanggal_pembelian', 'ASC');
        $tglawal = $this->request->getVar('tglawal');
        $tglakhir = $this->request->getVar('tglakhir');
        $nomor = 1;
        $dataLaporan = $this->jurnalPembelian->printDetailJurnalPembelian($tglawal, $tglakhir,);
        // dd($this->request->getVar());
        $data = [
            'datalaporan' => $dataLaporan,
            'tglawal' => $tglawal,
            'tglakhir' => $tglakhir,
            'nomor' => $nomor,

        ];

        return view('pages/cetak_laporan_pembelian', $data);
    }
}
