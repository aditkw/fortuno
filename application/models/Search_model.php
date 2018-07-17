<?php

/**
*
*/
class Search_model extends MY_Model {

  public function getServices($offset = 0, $like = '') {
    $this->db->select('*, i.image_name, MAX(i.image_seq)');
    $this->db->from('services s');
    $this->db->join('image i', 's.services_id = i.parent_id');
    $this->db->where('i.image_parent_name', 'services');
    $this->db->like('s.services_name', $like);
    $this->db->group_by('i.parent_id');
    $this->db->limit(4, $offset);
    $data = $this->db->get();
    $allData['data'] = $data->result_array();
    $allData['num_rows_offset'] = $data->num_rows();

    $this->db->select('services_id');
    $this->db->like('services_name', $like);
    $allData['num_rows'] = $this->db->get('services')->num_rows();
    return $allData;
  }

  public function getPortfolio($offset = 0, $like) {
    $this->db->select('*, i.image_name, MAX(i.image_seq)');
    $this->db->from('portofolio p');
    $this->db->join('image i', 'p.portofolio_id = i.parent_id');
    $this->db->where('i.image_parent_name', 'portofolio');
    $this->db->like('p.portofolio_name', $like);
    $this->db->group_by('i.parent_id');
    $this->db->limit(4, $offset);
    $data = $this->db->get();
    $allData['data'] = $data->result_array();
    $allData['num_rows_offset'] = $data->num_rows();

    $this->db->select('portofolio_id');
    $this->db->like('portofolio_name', $like);
    $allData['num_rows'] = $this->db->get('portofolio')->num_rows();
    return $allData;
  }
}

 ?>
