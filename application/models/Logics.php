<?php 
class Logics extends CI_Model
{
  function get_product_details($slug='')
  {
    if($slug)
    {
      return $this->db->where('slug',$slug)->get('products')->row();
    }
    else
    {
      return 'data';
    }
  }
  
  function get_posts($id='', $order_by ='', $limit='',$start='')
  {
    if($id)
    {
      return $this->db->where('id',$id)->get('posts')->row();
    }
    elseif($limit){

      if($order_by)
      {
        $this->db->order_by($order_by, "DESC");
      }
      $this->db->limit($limit, $start);
      $query = $this->db->get('posts');
      return $query->result();
    }
    else
    {
      return $this->db->get('posts')->result();
    }
  }

  function get_news($id='')
  {
    if($id)
    {
      return $this->db->where('id',$id)->get('news')->row();
    }
    else
    {
      return $this->db->get('news')->result();
    }
  }


}
 