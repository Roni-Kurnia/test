<?php

class Project extends Controller{
    public function index() {
        $data['judul'] = 'Project';
        
        // Membaca data project dari file JSON
        $jsonFile = 'app/models/projects.json';
        $jsonData = file_get_contents($jsonFile);
        $projectsData = json_decode($jsonData, true);
        
        $data['projects'] = $projectsData['projects'];
        
        $this->view('templates/header', $data);
        $this->view('project/index', $data);
        $this->view('templates/footer');
    }
}