<?php

/**
* SELECT s.services_id, s.services_name, s.services_link, i.image_name, MAX(i.image_id), c.catservices_link FROM fortu_services s INNER JOIN fortu_catservices c ON c.catservices_id = s.catservices_id INNER JOIN fortu_image i ON s.services_id = i.parent_id WHERE i.image_parent_name = 'services' && s.services_name like '%plu%' GROUP BY i.parent_id

*/
class Search_model extends MY_Model {

  public function getServices($offset = 0, $like = '') {
    $this->db->select('s.services_id, s.services_name, s.services_name_en, s.services_desc, s.services_desc_en, s.services_link, i.image_name, MAX(i.image_id), c.catservices_link');
    $this->db->from('services s');
    $this->db->join('catservices c', 'c.catservices_id = s.catservices_id');
    $this->db->join('image i', 's.services_id = i.parent_id');
    $this->db->where('i.image_parent_name', 'services');
    $this->db->group_start();
    $this->db->like('s.services_name', $like);
    $this->db->or_like('s.services_name', $like);
    $this->db->or_like('s.services_name_en', $like);
    $this->db->or_like('s.services_desc', $like);
    $this->db->or_like('s.services_desc_en', $like);
    $this->db->or_like('c.catservices_name', $like);
    $this->db->or_like('c.catservices_name_en', $like);
    $this->db->or_like('c.catservices_desc', $like);
    $this->db->or_like('c.catservices_desc_en', $like);
     $this->db->group_end();
    $this->db->group_by('i.parent_id');
    $this->db->limit(4, $offset);
    $data = $this->db->get();
    $allData['num_rows_offset'] = $data->num_rows();
    $allData['data'] = $this->olahArray($data->result_array(), 8);

    $this->db->select('s.services_id, MAX(i.image_id)');
    $this->db->from('services s');
    $this->db->join('catservices c', 'c.catservices_id = s.catservices_id');
    $this->db->join('image i', 's.services_id = i.parent_id');
    $this->db->where('i.image_parent_name', 'services');
    $this->db->group_start();
    $this->db->like('s.services_name', $like);
    $this->db->or_like('s.services_name', $like);
    $this->db->or_like('s.services_name_en', $like);
    $this->db->or_like('s.services_desc', $like);
    $this->db->or_like('s.services_desc_en', $like);
    $this->db->or_like('c.catservices_name', $like);
    $this->db->or_like('c.catservices_name_en', $like);
    $this->db->or_like('c.catservices_desc', $like);
    $this->db->or_like('c.catservices_desc_en', $like);
    $this->db->group_end();
    $this->db->group_by('i.parent_id');
    $allData['num_rows'] = $this->db->get()->num_rows();
    return $allData;
  }

  public function getPortfolio($offset = 0, $like) {
    $this->db->select('p.portofolio_id, p.portofolio_name, p.portofolio_name_en, p.portofolio_desc, p.portofolio_desc_en, p.portofolio_link, i.image_name, MAX(i.image_id)');
    $this->db->from('portofolio p');
    $this->db->join('image i', 'p.portofolio_id = i.parent_id');
    $this->db->where('i.image_parent_name', 'portofolio');
    $this->db->group_start();
    $this->db->like('p.portofolio_name', $like);
    $this->db->or_like('p.portofolio_name_en', $like);
    $this->db->or_like('p.portofolio_desc', $like);
    $this->db->or_like('p.portofolio_desc_en', $like);
    $this->db->group_end();
    $this->db->group_by('i.parent_id');
    $this->db->limit(4, $offset);
    $data = $this->db->get();
    $allData['num_rows_offset'] = $data->num_rows();
    $allData['data'] = $this->olahArray($data->result_array());

    $this->db->select('p.portofolio_id, MAX(i.image_id)');
    $this->db->from('portofolio p');
    $this->db->join('image i', 'p.portofolio_id = i.parent_id');
    $this->db->where('i.image_parent_name', 'portofolio');
    $this->db->group_start();
    $this->db->like('p.portofolio_name', $like);
    $this->db->or_like('p.portofolio_name_en', $like);
    $this->db->or_like('p.portofolio_desc', $like);
    $this->db->or_like('p.portofolio_desc_en', $like);
    $this->db->group_end();
    $this->db->group_by('i.parent_id');
    $allData['num_rows'] = $this->db->get('portofolio')->num_rows();
    return $allData;
  }

  public function olahArray($arr, $max = 7) {
    $i = 0; $j = 0; $arrNew = array(array());
    foreach ($arr as $value) {
      foreach ($value as $value2) {
        switch ($j) {
          case 0 : $key = 'id'; break;
          case 1 : $key = 'name'; break;
          case 2 : $key = 'name_en'; break;
          case 3 : $key = 'desc'; break;
          case 4 : $key = 'desc_en'; break;
          case 5 : $key = 'linkn'; break;
          case 6 : $key = 'image_name'; break;
          case 7 : $key = 'maxImg'; break;
          case 8 : $key = 'catservice'; break;
        }
        if ($key === 'catservice' && $max === 8) {
          $arrNew[$i]['linkn'] = 'services/'.$value2.'#'.$arrNew[$i]['linkn'];
        } else if ($key === 'linkn' && $max === 7) {
          $arrNew[$i][$key] = 'portfolio/'.$value2;
        } else {
          $arrNew[$i][$key] = $value2;
        }
        $j++;
        if ($j > $max) {
          $j = 0;
        }
      }
      $i++;
    }
    return $arrNew;
  }
}

 ?>
