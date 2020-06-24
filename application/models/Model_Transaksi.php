<?php
class Model_Transaksi extends CI_Model
{
    // public function tampil_data($category)
    // {
    //     if ($category == '') {
    //         return $this->db->get('tb_product');
    //     } else {
    //         return $this->db->get_where('tb_product', array('category' => $category));
    //     }
    // }

    public function transaksi($type, $x, $y)
    {
        $query = "
        SELECT
        `tb_transaksi`.`id_transaksi`, `tb_transaksi`.`tanggal`, `tb_user`.`nama`,
        `tb_product`.`id_product`, `tb_product`.`name_product`, `tb_detail_transaksi`.`qty`, `tb_product`.`price`, `tb_detail_transaksi`.`subtotal`
        FROM `tb_user`
        JOIN `tb_transaksi`
        ON `tb_user`.`id_user` = `tb_transaksi`.`kasir_id`
        JOIN `tb_detail_transaksi`
        ON `tb_detail_transaksi`.`transaksi_id` = `tb_transaksi`.`id_transaksi`
        JOIN `tb_product`
        ON `tb_product`.`id_product` = `tb_detail_transaksi`.`produk_id`
        ";

        if ($type == 'date') {
            return $this->db->query($query . "WHERE `tb_transaksi`.`tanggal` BETWEEN '$x' AND '$y'");
        } else {
            return $this->db->query($query);
        }
    }

    public function filter_transaksi($from, $to)
    {
        $query = "
        SELECT
        `tb_transaksi`.`id_transaksi`, `tb_transaksi`.`tanggal`, `tb_user`.`nama`,
        `tb_product`.`id_product`, `tb_product`.`name_product`, `tb_detail_transaksi`.`qty`, `tb_product`.`price`, `tb_detail_transaksi`.`subtotal`
        FROM `tb_user`
        JOIN `tb_transaksi`
        ON `tb_user`.`id_user` = `tb_transaksi`.`kasir_id`
        JOIN `tb_detail_transaksi`
        ON `tb_detail_transaksi`.`transaksi_id` = `tb_transaksi`.`id_transaksi`
        JOIN `tb_product`
        ON `tb_product`.`id_product` = `tb_detail_transaksi`.`produk_id`
        WHERE `tb_transaksi`.`tanggal` BETWEEN '$from' AND '$to'
        ";

        return $this->db->query($query);
    }

    public function nota_transaksi()
    {
        $id = $this->getLastId();
        $query = "
            SELECT
            `tb_transaksi`.`id_transaksi`, `tb_transaksi`.`tanggal`, `tb_transaksi`.`total`, `tb_user`.`id_user`, `tb_user`.`nama`
            FROM `tb_transaksi`
            JOIN `tb_user`
            ON `tb_transaksi`.`kasir_id` = `tb_user`.`id_user`
            WHERE `tb_transaksi`.`id_transaksi` = '$id'
        ";

        return $this->db->query($query);
    }

    public function nota_detail_transaksi()
    {
        $id = $this->getLastId();
        $query = "
            SELECT
            `tb_product`.`id_product`, `tb_product`.`name_product`, `tb_detail_transaksi`.`qty`, `tb_product`.`price`, `tb_detail_transaksi`.`subtotal`
            FROM `tb_user`
            JOIN `tb_transaksi`
            ON `tb_user`.`id_user` = `tb_transaksi`.`kasir_id`
            JOIN `tb_detail_transaksi`
            ON `tb_detail_transaksi`.`transaksi_id` = `tb_transaksi`.`id_transaksi`
            JOIN `tb_product`
            ON `tb_product`.`id_product` = `tb_detail_transaksi`.`produk_id`
            WHERE `tb_transaksi`.`id_transaksi` = '$id'
        ";

        return $this->db->query($query);
    }

    public function getLastId()
    {
        $this->db->select_max('id_transaksi', 'id');
        $query = $this->db->get('tb_transaksi')->row_array();

        return $query['id'];
    }

    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // public function edit_product($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }

    // public function update_data($where, $data, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->update($table, $data);
    // }

    // public function hapus_data($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }

    // public function find($id)
    // {
    //     $result = $this->db->where('id_product', $id)
    //         ->limit(1)
    //         ->get('tb_product');
    //     if ($result->num_rows() > 0) {
    //         return $result->row();
    //     } else {
    //         return array();
    //     }
    // }

    // public function detail_product($id_product)
    // {
    //     $result = $this->db->where('id_product', $id_product)->get('tb_product');
    //     if ($result->num_rows() > 0) {
    //         return $result->result();
    //     } else {
    //         return false;
    //     }
    // }
}
