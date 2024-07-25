<?php

class Article_model extends CI_Model
{

	private $_table = 'article';

	public function rules()
	{
		return [
			[
				'field' => 'title',
				'label' => 'Title',
				'rules' => 'required|max_length[128]'
			],
			[
				'field' => 'draft',
				'label' => 'Draft',
				'rules' => 'required|in_list[true,false]'
			],
			[
				'field' => 'content',
				'label' => 'Content',
				'rules' => '' // <-- rules dikosongkan
			]
		];
	}

	public function get($limit = null, $offset = null)
	{
		$this->db->order_by('article.id', 'DESC');
		$query = $this->db->get($this->_table, $limit, $offset);
		return $query->result();
	}

	public function getByCategories($limit = null, $categories = null)
	{
		$q = "SELECT a.id, k.nama_kategori, a.title, a.slug, a.content, a.gambar, a.gambar, a.keterangan_gambar, a.created_at  
		FROM `article` AS a INNER JOIN `kategori` AS k ON 
		a.id_kategori = k.id 
		WHERE k.nama_kategori = '$categories' LIMIT $limit";
		return $this->db->query($q)->result();
	}

	public function count()
	{
		return $this->db->count_all($this->_table);
	}

	public function get_published_count()
	{
		$query = $this->db->get_where($this->_table, ['draft' => 'FALSE']);
		return $query->num_rows();
	}

	public function getTitle($slug){
    $q = "SELECT title FROM `$this->_table` WHERE slug = '$slug'";
    $result = $this->db->query($q)->row(); // Mengambil satu baris hasil query

    if ($result) {
        return $result->title; // Mengembalikan nilai title
    } else {
        return null; // Mengembalikan null jika tidak ada hasil
    }
	}

	public function get_published($limit = null, $offset = null)
	{
		if (!$limit && $offset) {
			$query = $this->db
				->get_where($this->_table, ['draft' => 'FALSE']);
		} else {
			$query =  $this->db
				->get_where($this->_table, ['draft' => 'FALSE'], $limit, $offset);
		}
		return $query->result();
	}

	public function find_by_slug($slug)
	{
		if (!$slug) {
			return;
		}
		$query = $this->db->get_where($this->_table, ['slug' => $slug]);
		return $query->row();
	}

	public function find($id)
	{
		if (!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id' => $id));
		return $query->row();
	}

	public function search($keyword)
	{
		if(!$keyword){
			return null;
		}
		$this->db->like('title', $keyword);
		$this->db->or_like('content', $keyword);
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function insert($article)
	{
		return $this->db->insert($this->_table, $article);
	}

	public function update($article)
	{
		if (!isset($article['id'])) {
			return;
		}

		return $this->db->update($this->_table, $article, ['id' => $article['id']]);
	}

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		return $this->db->delete($this->_table, ['id' => $id]);
	}
}
