<?php

class Data {
    static private $ds;
    static public function initialize($data_provider) {
        return self::$ds = $data_provider;
    }

    static public function get_news() {    
        return self::$ds->get_news();
    }


    static public function get_gallery() {    
        return self::$ds->get_gallery();
    }

    static public function add_to_gallery($image) {    
        return self::$ds->add_to_gallery($image);
    }

    static public function get_admin($key) {    
        return self::$ds->get_admin($key);
    }

    static public function get_all_admins() {    
        return self::$ds->get_all_admins();
    }

    static public function delete_admin($id) {    
        return self::$ds->delete_admin($id);
    }

    static public function register_admin($name, $password) {    
        return self::$ds->register_admin($name, $password);
    }

    static public function check_old_pass($old_pass, $id) {    
        return self::$ds->check_old_pass($old_pass, $id);
    }

    static public function get_programs() {    
        return self::$ds->get_programs();
    }

    static public function get_updates() {    
        return self::$ds->get_updates();
    }
    
    static public function get_news_data($term) {
        return self::$ds->get_news_data($term);
    }
    
    static public function get_gallery_data($id) {
        return self::$ds->get_gallery_data($id);
    }

    static public function get_programs_data($term) {
        return self::$ds->get_programs_data($term);
    }

    static public function get_updates_data($term) {
        return self::$ds->get_updates_data($term);
    }
    
    static public function search_terms($search) {
        return self::$ds->search_terms($search);
    }
    
    static public function add_news($title, $description, $image) {
        return self::$ds->add_news($title, $description, $image);
    }
    
    static public function add_programs($title, $description, $image) {
        return self::$ds->add_programs($title, $description, $image);
    }
    
    static public function add_updates($title, $description, $image) {
        return self::$ds->add_updates($title, $description, $image);
    }
    
    static public function update_news($original_title, $new_title, $description, $image) {
        return self::$ds->update_news($original_title, $new_title, $description, $image);
    }
    
    static public function update_programs($original_title, $new_title, $description, $image) {
        return self::$ds->update_programs($original_title, $new_title, $description, $image);
    }

    static public function update_updates($original_title, $new_title, $description, $image) {
        return self::$ds->update_updates($original_title, $new_title, $description, $image);
    }
    
    static public function delete_news($term) {
        return self::$ds->delete_news($term);
    }
    
    static public function delete_from_gallery($id) {
        return self::$ds->delete_from_gallery($id);
    }
    
    static public function delete_programs($term) {
        return self::$ds->delete_programs($term);
    }
    
    static public function delete_updates($term) {
        return self::$ds->delete_updates($term);
    }


    static public function authenticate_user($name, $password) {
        return self::$ds->authenticate_user($name, $password);
    }

    static function update_admin_profile($name, $password, $id) {
        return self::$ds->update_admin_profile($name, $password, $id);
    }

}
