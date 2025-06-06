<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VideoController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form', 'url']);
        $this->load->library('upload');
        $this->load->database();
    }

    public function upload()
    {
        $config['upload_path'] = './assets/resources/uploads/';
        $config['allowed_types'] = 'mp4|avi|mov|mkv';
        $config['max_size'] = 1102400; // 1000MB
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('videoUpload')) {
            echo "Upload failed: " . $this->upload->display_errors();
        } else {
            $data = $this->upload->data();

            $file_data = [
                'filename' => $data['file_name'],
                'filepath' => 'assets/resources/uploads/' . $data['file_name'],
                'uploaded_at' => date('Y-m-d H:i:s')
            ];

            $this->db->insert('qms_videos', $file_data);

            echo "Video uploaded and saved to database successfully.";
        }
    }
}
