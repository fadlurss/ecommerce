<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

    private $id_users;
    private $username;
    private $email;
    private $password;
    private $signup_date;
    private $nama_lengkap;
    private $no_hp;
    private $alamat;

    function getId_users() {
        return $this->id_users;
    }

    function getUsername() {
        return $this->username;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getSignup_date() {
        return $this->signup_date;
    }

    function getNama_lengkap(){
        return $this->nama_lengkap;
    }

    function getNo_hp(){
        return $this->no_hp;
    }

    function getAlamat(){
        return $this->alamat;
    }

    function setId_users($id_users) {
        $this->id_users = $id_users;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setSignup_date($signup_date) {
        $this->signup_date = $signup_date;
    }

    function setNama_lengkap($nama_lengkap){
        $this->nama_lengkap = $nama_lengkap;
    }

    function setNo_hp($no_hp){
        $this->no_hp = $no_hp;
    }

    function setAlamat($alamat){
        $this->alamat = $alamat;
    }

    function find($param = "id_users", $val = "") {
        if ($val == "") {
            return $this->db->get("users");
        } else {
            return $this->db->get_where("users", array($param => $val));
        }
    }

    function save() {
        $data = array("id_users" => $this->id_users, "username" => $this->username, "email" => $this->email, "password" => $this->password, "signup_date" => date("Y-m-d"), "nama_lengkap" => $this->nama_lengkap, "no_hp" => $this->no_hp, "alamat" => $this->alamat);
        return $this->db->insert("users", $data);
    }

    function update($param = "id_users", $val = "") {
        $data = array("username" => $this->username, "email" => $this->email, "password" => $this->password, "signup_date" => $this->signup_date);
        if ($val == "") {
            return $this->db->where($param, $this->id_users)->update("users", $data);
        } else {
            return $this->db->where($param, $val)->update("users", $data);
        }
    }

    function delete($param = "id_users", $val = "") {
        if ($val == "") {
            return $this->db->delete("users", array($param => $this->id_users));
        } else {
            return $this->db->delete("users", array($param => $val));
        }
    }

}
