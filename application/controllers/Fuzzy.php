<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fuzzy extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->library('pagination');
    }

    public function index()
    {
        $this->load->view('fuzzy/fuzzy');
    }

    public function input()
    {
        $this->session->set_userdata('p_turun', $this->input->post('p_turun'));
        $this->session->set_userdata('p_naik', $this->input->post('p_naik'));
        $this->session->set_userdata('p_sedikit', $this->input->post('p_sedikit'));
        $this->session->set_userdata('p_banyak', $this->input->post('p_banyak'));
        $this->session->set_userdata('p_min', $this->input->post('p_min'));
        $this->session->set_userdata('p_max', $this->input->post('p_max'));
        $this->session->set_userdata('per_min', $this->input->post('per_min'));
        $this->session->set_userdata('per_sed', $this->input->post('per_sed'));
        $this->fuzzifikasi();
        $rule1 = $this->operasi_fuzzy($this->session->userdata('m_turun'), $this->session->userdata('m_banyak'));
        $rule2 = $this->operasi_fuzzy($this->session->userdata('m_turun'), $this->session->userdata('m_sedikit'));
        $rule3 = $this->operasi_fuzzy($this->session->userdata('m_naik'), $this->session->userdata('m_banyak'));
        $rule4 = $this->operasi_fuzzy($this->session->userdata('m_naik'), $this->session->userdata('m_sedikit'));
        echo $this->session->userdata('m_naik');
        echo $this->session->userdata('m_sedikit');
        echo $rule4;
        $this->session->set_userdata('rule1', $rule1);
        $this->session->set_userdata('rule2', $rule2);
        $this->session->set_userdata('rule3', $rule3);
        $this->session->set_userdata('rule4', $rule4);
        $max_a1 = $this->max($rule1, $rule2);
        $max_a2 = $this->max($rule3, $rule4);
        $this->session->set_userdata('max_a1', $max_a1);
        $this->session->set_userdata('max_a2', $max_a2);
        $a1 = $this->komposisi_aturan($max_a1);
        $a2 = $this->komposisi_aturan($max_a2);
        $this->session->set_userdata('a1', $a1);
        $this->session->set_userdata('a2', $a2);
        $this->session->set_userdata('hasil', $this->defuzzifikasi());
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function fuzzifikasi()
    {
        $m_turun = round(($this->session->userdata('p_naik') - $this->session->userdata('per_min')) / ($this->session->userdata('p_naik') - $this->session->userdata('p_turun')), 2);
        $m_naik = round(($this->session->userdata('per_min') - $this->session->userdata('p_turun')) / ($this->session->userdata('p_naik') - $this->session->userdata('p_turun')), 2);
        $m_sedikit = round(($this->session->userdata('p_banyak') - $this->session->userdata('per_sed')) / ($this->session->userdata('p_banyak') - $this->session->userdata('p_sedikit')), 2);
        $m_banyak = round(($this->session->userdata('per_sed') - $this->session->userdata('p_sedikit')) / ($this->session->userdata('p_banyak') - $this->session->userdata('p_sedikit')), 2);
        $this->session->set_userdata('m_turun', $m_turun);
        $this->session->set_userdata('m_naik', $m_naik);
        $this->session->set_userdata('m_sedikit', $m_sedikit);
        $this->session->set_userdata('m_banyak', $m_banyak);
    }

    public function operasi_fuzzy($data1, $data2)
    {
        if ($data1 < $data2) {
            $rule = $data1;
        } else {
            $rule = $data2;
        }
        return $rule;
    }

    public function komposisi_aturan($data)
    {

        $hasil = (($this->session->userdata('p_max') - $this->session->userdata('p_min'))) * $data + $this->session->userdata('p_min');
        return $hasil;
    }

    public function max($data1, $data2)
    {
        if ($data1 > $data2) {
            $rule = $data1;
        } else {
            $rule = $data2;
        }
        return $rule;
    }

    public function defuzzifikasi()
    {
        $sum = 0;
        $sum2 = 0;
        $count = 0;
        for ($i = 1; $i <= 10; $i++) {
            $data1 = rand($this->session->userdata('p_min'), $this->session->userdata('p_max'));
            $data2 = rand($this->session->userdata('p_min'), $this->session->userdata('p_max'));
            $this->session->set_userdata("bertambah[$i]", $data1);
            $this->session->set_userdata("berkurang[$i]", $data2);
            $sum = $sum + $data1;
            $sum2 = $sum2 + $data2;
            $count++;
        }
        $hasil = round((($sum * $this->session->userdata('max_a1')) + ($sum2 * $this->session->userdata('max_a2'))) / ($count * $this->session->userdata('max_a1')) + ($count * $this->session->userdata('max_a2')));
        return $hasil;
    }

    public function reset()
    {
        $this->session->sess_destroy();
        redirect($_SERVER['HTTP_REFERER']);
    }
}
