<?php
class VideoModel extends CI_Model
{

    public function get_all_videos()
    {
        return $this->db->get('qms_videos')->result();
    }
}
