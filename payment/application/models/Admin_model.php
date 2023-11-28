<?php
class Admin_model extends CI_Model {
    public function authlogin($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        return $query;
    }
    public function addblog($data) {
        $query = $this->db->insert('blogs', $data);
        return $query;
    }
    public function getallblog() {
        $this->db->select('*');
        $this->db->order_by("blog_date", "desc");
        $query = $this->db->get('blogs');
        return $query;
    }
    public function allpayment() {
   $query = $this->db->query("SELECT COUNT(id) as totalpayment FROM `payments`;");
   return $query;
    }
    public function viewblogdetails($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('blogs');
        return $query;
    }
    public function updateblog($data,$id) {
        $this->db->where('id', $id);
        $query= $this->db->update('blogs', $data);
        return $query;
    }
    public function blogstatus($id,$data) {
        $this->db->where('id', $id);
        $query= $this->db->update('blogs', $data);
        return $query;
    }
    public function deleteblog($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('blogs');
        return $query;
    }
    public function addclientstories($data) {
        $query = $this->db->insert('client_stories', $data);
        return $query;
    }
    public function getallclientstories() {
        $this->db->select('*');
        $this->db->order_by("upload_date", "desc");
        $query = $this->db->get('client_stories');
        return $query;
    }
    public function storystatus($id,$data) {
        $this->db->where('id', $id);
        $query= $this->db->update('client_stories', $data);
        return $query;
    }
    public function deletestory($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('client_stories');
        return $query;
    }
    public function viewclientstorydetails($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('client_stories');
        return $query;
    }
    public function updateclientstories($id,$data) {
        $this->db->where('id', $id);
        $query= $this->db->update('client_stories', $data);
        return $query;
    }
    public function fetchallclientstories() {
        $this->db->select('*');
        $this->db->where('status', 'enable');
        $this->db->order_by("storydate", "desc");
        $query = $this->db->get('client_stories');
        return $query;
    }
    public function recentclientstories() {
        $this->db->select('*');
        $this->db->where('status','enable');
        $this->db->order_by("storydate", "desc");
        $this->db->limit(3);
        $query = $this->db->get('client_stories');
        return $query;
    }
    public function particularstory($link) {
        $this->db->select('*');
        $this->db->where('status','enable');
        $this->db->where("story_link", $link);
        $query = $this->db->get('client_stories');
        return $query;
    }
    public function fetchallblogs() {
        $this->db->select('*');
        $this->db->where('status', 'enable');
        $this->db->order_by("blog_date", "desc");
        $query = $this->db->get('blogs');
        return $query;
    }
    public function particularblog($link) {
        $this->db->select('*');
        $this->db->where('status','enable');
        $this->db->where("blog_link", $link);
        $query = $this->db->get('blogs');
        return $query;
    }
    
    public function recentblogs() {
        $this->db->select('*');
        $this->db->where('status','enable');
        $this->db->order_by("blog_date", "desc");
        $this->db->limit(5);
        $query = $this->db->get('blogs');
        return $query;
    }
    
    public function fetchhomepageblogs() {
        $this->db->select('*');
        $this->db->where('status', 'enable');
        $this->db->order_by("blog_date", "desc");
        $this->db->limit(3);
        $query = $this->db->get('blogs');
        return $query;
    }
    public function filterblogbycategory($category) {
        $this->db->select('*');
        $this->db->where('status', 'enable');
        $this->db->where('category', $category);
        $this->db->order_by("blog_date", "desc");
        $query = $this->db->get('blogs');
        return $query;
    }
    
    public function lastlookid() {
        $this->db->select('*');
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        $query = $this->db->get('looks');
        return $query;
    }
    
    
    public function addextra($data2){
           $query= $this->db->insert('looks_img',$data2);
           return $query;
    }
    
    public function addlook($data) {
        $query = $this->db->insert('looks', $data);
        return $query;
    }
    
    public function getalllooks() {
        $this->db->select('*');
        $this->db->order_by("upload_date", "desc");
        $query = $this->db->get('looks');
        return $query;
    }
    
    public function viewlookdetails($id) {
        $this->db->select('*');
        $this->db->where('lookid', $id);
        $this->db->order_by("upload_date", "desc");
        $query = $this->db->get('looks');
        return $query;
    }
    public function viewlookdetails2($id) {
        $this->db->select('*');
        $this->db->where('lookid', $id);
        $this->db->order_by("upload_date", "desc");
        $query = $this->db->get('looks_img');
        return $query;
    }
    
    public function deleteextraimg($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('looks_img');
        return $query;
    }
    
    public function updatelook($data,$id) {
        $this->db->where('id', $id);
        $query= $this->db->update('looks', $data);
        return $query;
    }
    
    public function looksstatus($id,$data) {
        $this->db->where('lookid', $id);
        $query= $this->db->update('looks', $data);
        return $query;
    }
    public function deletelooks($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('looks');
        return $query;
    }
    public function fetchalllooks() {
        $this->db->select('*');
        $this->db->where('status','enable');
        $this->db->order_by("upload_date", "desc");
        $query = $this->db->get('looks');
        return $query;
    }
    public function filterlooksbycategory($category) {
        $this->db->select('*');
        $this->db->where('status', 'enable');
        $this->db->where('category', $category);
        $this->db->order_by("upload_date", "desc");
        $query = $this->db->get('looks');
        return $query;
    }
    
    public function particularlook($link) {
        $this->db->select('*');
        $this->db->where('status','enable');
        $this->db->where("link", $link);
        $query = $this->db->get('looks');
        return $query;
    }
    
    public function particularlook1($id) {
        $this->db->select('*');
        $this->db->where("lookid", $id);
        $query = $this->db->get('looks_img');
        return $query;
    }
     public function blogdetail($i) {
        $this->db->select('*');
        $this->db->where("blog_link", $i);
        $query = $this->db->get('blogs');
        return $query;
    }
    
    public function latestblogs($i) {
        $this->db->select('*');
        $this->db->where('status', 'enable');
        $this->db->where('blog_link !=', $i);
        $this->db->order_by("upload_date", "desc");
        $this->db->limit("3");
        $query = $this->db->get('blogs');
        return $query;
    }
    
    public function addblogcomment($data){
           $query= $this->db->insert('blog_comments',$data);
           return $query;
    }
    
    public function comments() {
        $this->db->select('*');
        $this->db->order_by("added_on", "desc");
        $query = $this->db->get('blog_comments');
        return $query;
    }
    
    public function commentsname($i) {
        $this->db->select('*');
        $this->db->where('id', $i);
        $query = $this->db->get('blogs');
        return $query;
    }
     public function commentstatus($id,$data) {
        $this->db->where('id', $id);
        $query= $this->db->update('blog_comments', $data);
        return $query;
    }
    
    public function deletecomment($id) {
        $this->db->where('id', $id);
        $query = $this->db->delete('blog_comments');
        return $query;
    }
     public function deletecomments($id) {
        $this->db->where('blog_id', $id);
        $query = $this->db->delete('blog_comments');
        return $query;
    }
    public function blogcommentfetch($blogid) {
        $this->db->select('*');
        $this->db->where('blog_id', $blogid);
        $query = $this->db->get('blog_comments');
        return $query;
    }
    
    public function getallpayments() {
        $this->db->select('*');
        $this->db->order_by("paymentdate", "desc");
        $query = $this->db->get('payments');
        return $query;
    }
    
}
?>
