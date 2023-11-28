<?php
class Superadmin extends CI_Model {
    public function can_login($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        return $query;
    }
    public function totalgallery() {
        $query = $this->db->query("SELECT COUNT(id) AS totalgallery FROM `gallery`;");
        return $query;
    }
    public function totalfees() {
        $query = $this->db->query("SELECT COUNT(id) AS totalfees FROM `fees`;");
        return $query;
    }
    public function totalnoticecircular() {
        $query = $this->db->query("SELECT COUNT(id) AS totalnoticecircular FROM `notice`;");
        return $query;
    }
    public function totalnewsevents() {
        $query = $this->db->query("SELECT COUNT(id) AS totalnewsevents FROM `newsevents`;");
        return $query;
    }
    public function lastnewseventid() {
        $query = $this->db->query("SELECT * FROM newsevents ORDER BY id DESC LIMIT 1;");
        return $query;
    }
    public function addnewseventsdata($data1) {
        $query = $this->db->insert('newsevents', $data1);
        return $query;
    }
    public function addcover($data2) {
        $query = $this->db->insert('productsimg', $data2);
        return $query;
    }
    public function addgallery($data) {
        $query = $this->db->insert('gallery', $data);
        return $query;
    }
    public function getallgallery() {
        $query = $this->db->query("SELECT * FROM `gallery` ORDER BY `date` ASC;");
        return $query;
    }
    public function getallnewsevents() {
        $query = $this->db->query("SELECT * FROM `newsevents` ORDER BY `date` ASC;");
        return $query;
    }
    public function viewneweventdetails($id) {
        $this->db->select('*');
        $this->db->where('eventid', $id);
        $query = $this->db->get('newsevents');
        return $query;
    }
    public function updatenewseventsdata($data1, $eventid) {
        $this->db->where('eventid', $eventid);
        $query = $this->db->update('newsevents', $data1);
        return $query;
    }
    public function deleteviewnewsevent($id) {
        $this->db->where('eventid', $id);
        $query = $this->db->delete('newsevents');
        return $query;
    }
    public function statusnewsevent($id, $data) {
        $this->db->where('eventid', $id);
        $query = $this->db->update('newsevents', $data);
        return $query;
    }
    public function deletegalleryimg($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('gallery');
        return $query;
    }
    public function lastnoticeid() {
        $query = $this->db->query("SELECT * FROM notice ORDER BY id DESC LIMIT 1;");
        return $query;
    }
    public function addnoticedata($data1) {
        $query = $this->db->insert('notice', $data1);
        return $query;
    }
    public function getallnotice() {
        $query = $this->db->query("SELECT * FROM `notice` ORDER BY `date` ASC;");
        return $query;
    }
    public function deleteviewnotice1($id) {
        $this->db->where('noticeid', $id);
        $query = $this->db->delete('notice');
        return $query;
    }
    public function statusnotice($id, $data) {
        $this->db->where('noticeid', $id);
        $query = $this->db->update('notice', $data);
        return $query;
    }
    public function viewnoticedetails($id) {
        $this->db->select('*');
        $this->db->where('noticeid', $id);
        $query = $this->db->get('notice');
        return $query;
    }
    public function updatenoticedata($data1, $noticeid) {
        $this->db->where('noticeid', $noticeid);
        $query = $this->db->update('notice', $data1);
        return $query;
    }
    public function lastfeeid() {
        $query = $this->db->query("SELECT * FROM fees ORDER BY id DESC LIMIT 1;");
        return $query;
    }
    public function addfeesdata($data1) {
        $query = $this->db->insert('fees', $data1);
        return $query;
    }
    public function getallfees() {
        $query = $this->db->query("SELECT * FROM `fees` ORDER BY `date` ASC;");
        return $query;
    }
    public function deletefees($id) {
        $this->db->where('feesid', $id);
        $query = $this->db->delete('fees');
        return $query;
    }
    public function statusfees($id, $data) {
        $this->db->where('feesid', $id);
        $query = $this->db->update('fees', $data);
        return $query;
    }
    public function viewfeesdetails($id) {
        $this->db->select('*');
        $this->db->where('feesid', $id);
        $query = $this->db->get('fees');
        return $query;
    }
    public function updatefeesdata($data1, $feesid) {
        $this->db->where('feesid', $feesid);
        $query = $this->db->update('fees', $data1);
        return $query;
    }
    
    public function fetchnewevents() {
        $this->db->select('*');
        $this->db->where('status', 'enabled');
        $this->db->order_by("eventdate", "desc");
        $query = $this->db->get('newsevents');
        return $query;
    }
    public function fetchgallery() {
        $this->db->select('*');
        $this->db->order_by("date", "desc");
        $query = $this->db->get('gallery');
        return $query;
    }
    public function fetchnotice() {
        $this->db->select('*');
        $this->db->where('status', 'enabled');
        $this->db->order_by("noticedate", "desc");
        $query = $this->db->get('notice');
        return $query;
    }
    public function fetchfeesforbds() {
        $this->db->select('*');
        $this->db->where('status', 'enabled');
        $this->db->where('feecategory', 'BDS');
        $query = $this->db->get('fees');
        return $query;
    }
    public function fetchfeesformds() {
        $this->db->select('*');
        $this->db->where('status', 'enabled');
        $this->db->where('feecategory', 'MDS');
        $query = $this->db->get('fees');
        return $query;
    }
    public function fetchfeesforsspn() {
        $this->db->select('*');
        $this->db->where('status', 'enabled');
        $this->db->where('feecategory', 'SSPN');
        $query = $this->db->get('fees');
        return $query;
    }
    public function fetchfeesforfellowship() {
        $this->db->select('*');
        $this->db->where('status', 'enabled');
        $this->db->where('feecategory', 'FellowShip');
        $query = $this->db->get('fees');
        return $query;
    }
    public function fetchnews() {
        $this->db->select('*');
        $this->db->where('status', 'enabled');
        $this->db->order_by("eventdate", "desc");
        $this->db->limit(3);
        $query = $this->db->get('newsevents');
        return $query;
    }
}
?>
